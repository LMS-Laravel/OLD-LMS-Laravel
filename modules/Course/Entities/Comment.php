<?php namespace Modules\Course\Entities;
   
use Illuminate\Database\Eloquent\Model;
use Modules\User\Entities\User;

class Comment extends Model {

    protected $table = 'comments_lesson';

    protected $fillable = ['lesson_id', 'user_id', 'comment'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}