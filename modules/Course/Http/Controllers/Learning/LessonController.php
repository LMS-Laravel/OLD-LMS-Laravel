<?php namespace Modules\Course\Http\Controllers\Learning;

use Modules\Course\Repositories\CourseRepository;
use Modules\Course\Repositories\LessonRepository;
use Pingpong\Modules\Routing\Controller;

class LessonController extends Controller {

    /**
     * @var LessonRepository
     */
    private $lesson;
    /**
     * @var CourseRepository
     */
    private $course;

    public function __construct(LessonRepository $lesson, CourseRepository $course)
    {

        $this->lesson = $lesson;
        $this->course = $course;
    }

	public function show($id)
	{
        $lesson = $this->lesson->find($id);
        $courses = $this->course->all();


        if(!$lesson->view)
        {
            \Auth::user()->lessons()->attach($lesson->id);
            \Auth::user()->points += 10;
            \Auth::user()->save();
        };

        if($lesson->type == 1){
            $video = $lesson->resource;
            return \Theme::view('lessons/learning/video', compact('lesson', 'courses', 'video'));
        }
        else{
            return \Theme::view('lessons/learning/letter', compact('lesson', 'courses'));
        }
	}
	
}