<?php namespace Modules\Dashboard\Http\Controllers;

use Modules\Dashboard\Repositories\DashboardRepository;
use Pingpong\Modules\Routing\Controller;

class FrontendController extends Controller {

	/**
	 * @var DashboardRepository
	 */
	private $dashboard;

	public function __construct(DashboardRepository $dashboard)
	{

		$this->dashboard = $dashboard;
	}

	public function index()
	{
		$data = $this->dashboard->all()[0];

		return view('dashboard::frontend', compact('data'));
	}
	
}