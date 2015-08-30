<?php namespace Modules\Course\Http\Controllers\Learning;

use Modules\Course\Repositories\LessonRepository;
use Pingpong\Modules\Routing\Controller;

class LessonController extends Controller {

    /**
     * @var LessonRepository
     */
    private $lesson;

    public function __construct(LessonRepository $lesson)
    {

        $this->lesson = $lesson;
    }

	public function show($id)
	{
        $lesson = $this->lesson->find($id);
		return view('course::index');
	}
	
}