<?php namespace Modules\Course\Repositories;


use Prettus\Repository\Eloquent\BaseRepository;
use Modules\Course\Entities\Lesson;

class LessonRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Lesson::class;
    }

}