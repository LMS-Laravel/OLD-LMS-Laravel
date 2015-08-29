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
	
}