<?php namespace Modules\Course\Repositories;


use Prettus\Repository\Eloquent\BaseRepository;
use Modules\Course\Entities\Course;

class CourseRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Course::class;
    }


}