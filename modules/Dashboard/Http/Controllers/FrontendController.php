<?php namespace Modules\Dashboard\Http\Controllers;

use Modules\Dashboard\Repositories\DashboardRepository;
use Pingpong\Modules\Routing\Controller;
use Modules\Dashboard\Menus\PrincipalMenu;

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
		$principal = new PrincipalMenu();

		return view('dashboard::frontend', compact('data', 'principal'));
	}
	
}