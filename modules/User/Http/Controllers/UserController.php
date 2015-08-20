<?php namespace Modules\User\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class UserController extends Controller {
	
	public function index()
	{
		return view('user::index');
	}
	
}