<?php namespace Modules\Course\Entities;
   
use Illuminate\Database\Eloquent\Model;
use Modules\Auth\Entities\User;

class Lesson extends Model {

    protected $fillable = [];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class);
    }

    public function students()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function getViewAttribute()
    {
        $status = $this::whereHas('students', function($q)
        {
            $q->where('user_id', '=', \Auth::user()->id);
            $q->where('lesson_id', '=', $this->id);

        })->get();

        if($status->isEmpty()) return false;

        return true;
    }

}