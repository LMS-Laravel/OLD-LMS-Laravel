<?php namespace Modules\Course\Http\Controllers\Learning;

use Modules\Course\Http\Requests\Learning\CommentRequest;
use Modules\Course\Repositories\CommentRepository;
use Pingpong\Modules\Routing\Controller;

class CommentController extends Controller {

    /**
     * @var CommentRepository
     */
    private $comment;

    public function __construct(CommentRepository $comment)
    {
        $this->comment = $comment;
    }

    public function store(CommentRequest $request)
	{
        $data = $this->comment->create($request->all());
	}
	
}