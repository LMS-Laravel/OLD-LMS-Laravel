<?php namespace Modules\Course\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Module extends Model {

    protected $fillable = [];


    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}