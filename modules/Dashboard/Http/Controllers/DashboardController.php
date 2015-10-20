<?php namespace Modules\Dashboard\Http\Controllers;

use Modules\Dashboard\Repositories\DashboardRepository;
use Pingpong\Modules\Routing\Controller;
use Modules\Dashboard\Menus\PrincipalMenu;

class DashboardController extends Controller {

	/**
	 * @var DashboardRepository
	 */
	private $dashboard;

	public function __construct(DashboardRepository $dashboard)
	{
		$this->dashboard = $dashboard;
	}

	public function frontend()
	{
		$principal = new PrincipalMenu();
		return \Theme::view('dashboard.frontend', compact('principal'));
	}

	public function backend()
	{
		return \Theme::view('dashboard.backend', compact('principal'));
	}
}