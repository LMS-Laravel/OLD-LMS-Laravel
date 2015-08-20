<?php namespace Modules\Auth\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Pingpong\Modules\Routing\Controller;

class AuthController extends Controller {

    public function __construct() {

        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function index() {

        return view('auth::login');
    }

    public function postLogin(Request $request) {

        $this->validate($request, [
            Config::get('auth.login') => 'required|email', 'password' => 'required',
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

        return property_exists($this, 'loginPath') ? $this->loginPath : '/';
    }

    private function getCredentials(Request $request) {

        return $request->only(Config::get('auth.login'), 'password');
    }

    private function redirectPath() {

        if (property_exists($this, 'redirectPath')) {
            return $this->redirectPath;
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/dashboard';
    }

    private function getFailedLoginMessage() {

        return trans('auth::ui.login.credentials_error', array('field' => Config::get('auth.login')));
    }

}