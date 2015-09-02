<?php namespace Modules\User\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Pingpong\Modules\Routing\Controller;

class AuthController extends Controller {

    protected $loginPath;
    protected $redirectPath;
    protected $redirectTo;

    public function __construct() {
        $this->redirectPath = route('dashboard.learning');
        $this->redirectTo = $this->redirectPath;
        $this->loginPath = route('auth.loginGet');
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function index() {

        return \Theme::view('auth.login');
    }

    public function postLogin(Request $request) {

        $this->validate($request, [
            Config::get('auth.login') => 'required', 'password' => 'required',
        ]);

        $credentials = $this->getCredentials($request);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            return redirect()->intended($this->redirectPath());
        }

        return redirect($this->loginPath())
            ->withInput($request->only(Config::get('auth.login'), 'remember'))
            ->withErrors([
                Config::get('auth.login') => $this->getFailedLoginMessage(),
            ]);
    }

    public function getLogout() {

        Auth::logout();

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }

    private function loginPath() {

        return property_exists($this, 'loginPath') ? $this->loginPath : '/auth/login';
    }

    private function getCredentials(Request $request) {

        return $request->only(Config::get('auth.login'), 'password');
    }

    private function redirectPath() {

        if (property_exists($this, 'redirectPath')) {
            return $this->redirectPath;
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/learning';
    }

    private function getFailedLoginMessage() {

        return trans('user::ui.login.credentials_error', array('field' => Config::get('auth.login')));
    }

}