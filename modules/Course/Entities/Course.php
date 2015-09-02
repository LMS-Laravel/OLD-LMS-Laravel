<?php namespace Modules\Course\Entities;
   
use Illuminate\Database\Eloquent\Model;
use Modules\User\Entities\User;

class Course extends Model {

    protected $fillable = [];

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function teacher()
    {
        return $this->hasOne(User::class, 'id', 'teacher_id');
    }

}