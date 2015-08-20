<?php namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Modules\Dashboard\Entities\Dashboard;
use Pingpong\Modules\Routing\Controller;

class DashboardController extends Controller {

    public function __construct() {

        $this->middleware('auth');
    }
	
	public function index() {

		if (Auth::user()->hasRole('admin')) {

			$data = Dashboard::getCountUsers();

			return view('dashboard::dashboard_admin', compact('data'));

		}
	}
}