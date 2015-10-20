<?php  namespace Modules\Dashboard\Menus;


use App\BaseMenu;

class PrincipalMenu extends BaseMenu
{

    public function __construct()
    {
        $this->class = 'nav navbar-nav navbar-right nav-effect uppercase';
    }

    /**
     * Specify Items Menu
     * @return string
     */
    public function items()
    {
        return [
            'home'  => [
                'title' => trans('dashboard::menus.principal.home'),
                'url'   => '#home',
                'data-scroll' => true
            ],
            'about'  => [
                'title' => trans('dashboard::menus.principal.about'),
                'url'   => '#about',
                'data-scroll' => true
            ],
            'team'  => [
                'title' => trans('dashboard::menus.principal.team'),
                'url'   => '#team',
                'data-scroll' => true
            ],
            'services'  => [
                'title' => trans('dashboard::menus.principal.services'),
                'url'   => '#services',
                'data-scroll' => true
            ],
            'platform'  => [
                'title' => trans('dashboard::menus.principal.platform'),
                'url'   => route('auth.loginGet'),
                'data-scroll' => true
            ],
            'contact'  => [
                'title' => trans('dashboard::menus.principal.contact'),
                'url'   => '#contact',
                'data-scroll' => true
            ],
            'facebook'  => [
                'url'   => '#',
                'icon'  => 'fa fa-facebook',
            ],
            'twitter'  => [
                'url'   => '#',
                'icon'  => 'fa fa-twitter',
            ],
            'google'  => [
                'url'   => '#',
                'icon'  => 'fa fa-google',
            ],
        ];
    }

}