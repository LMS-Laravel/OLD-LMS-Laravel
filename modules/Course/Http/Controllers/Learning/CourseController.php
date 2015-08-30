<?php namespace Modules\Course\Http\Controllers\Learning;

use Modules\Course\Repositories\CourseRepository;
use Pingpong\Modules\Routing\Controller;

class CourseController extends Controller {

	/**
	 * @var CourseRepository
	 */
	private $course;

	public function __construct(CourseRepository $course)
	{

		$this->course = $course;
	}
	
	public function index()
	{
		$courses = $this->course->all();
		return \Theme::view('courses/learning/index', compact('courses'));
	}

	public function show($id)
	{
		$course = $this->course->with(['modules'])->find($id);
		$modules = $course->modules;
		$courses = $this->course->all();
		$sharer = \Share::load(route('learning.course.show', $course->id), trans('course::show.messages.sharer', ['name'=>$course->name]))->services('facebook', 'gplus', 'twitter');

		return \Theme::view('courses/learning/show', compact('course', 'modules', 'sharer', 'courses'));
	}
	
}