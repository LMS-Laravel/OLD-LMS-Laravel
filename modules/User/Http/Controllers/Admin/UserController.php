<?php namespace Modules\User\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Modules\User\Entities\User;
use Modules\User\Http\Requests\UserRequest;
use Pingpong\Modules\Routing\Controller;
use Modules\User\Entities\Role;

class UserController extends Controller {

    public function __construct() {

        $this->middleware('auth');
    }

	public function index() {

        if(Auth::user()->can('read-users')) {

            $users = User::with('roles')->get();

            return \Theme::view('admin.user.index', compact('users'));
        }

        return redirect('auth/logout');
	}

    public function create() {

        if(Auth::user()->can('create-users')) {

            $roles = Role::orderBy('display_name', 'asc')->lists('display_name', 'id');

            return \Theme::view('admin.user.create', compact('roles'));
        }

        return redirect('auth/logout');
    }

    public function store(UserRequest $request) {

        if(Auth::user()->can('create-users')) {

            $data = User::create([
                'firstname' =>  $request->input('firstname'),
                'lastname'  =>  $request->input('lastname'),
                'username'  =>  $request->input('username'),
                'email'     =>  $request->input('email'),
                'password'  =>  \Hash::make($request->input('password')),
            ]);

            $user = User::findOrFail($data->id);

            $data->attachRoles($request->input('role_id'));

            Session::flash('message', trans('auth::ui.user.message_create', array('name' => $user->firstname)));

            return redirect('auth/user/create');
        }

        return redirect('auth/logout');
    }

    public function edit($id) {

        if(Auth::user()->can('update-users')) {

            $user = User::findOrFail($id);

            $roles_user = User::find($id)->roles()->lists('role_id')->toArray();

            $roles = Role::orderBy('display_name', 'asc')->lists('display_name', 'id');

            return \Theme::view('admin.user.edit', compact('user', 'roles', 'roles_user'));
        }

        return redirect('auth/logout');
    }

    public function update($id, UserRequest $request){

        if(Auth::user()->can('update-users')) {

            $data = ! $request->has('password') ? $request->except('password') : array(
                    'firstname' =>  $request->input('firstname'),
                    'lastname'  =>  $request->input('lastname'),
                    'username'  =>  $request->input('username'),
                    'email'     =>  $request->input('email'),
                    'password'  =>  \Hash::make($request->input('password')),
            );

            $user = User::findOrFail($id);

            $user->update($data);

            if($user->roles->count()) {

                $user->roles()->detach($user->roles()->lists('role_id')->toArray());
            }

            $user->attachRoles($request->input('role_id'));

            Session::flash('message', trans('auth::ui.user.message_update', array('name' => $user->firstname)));

            return redirect('auth/user');
        }

        return redirect('auth/logout');
    }

    public function destroy($id) {

        if($this->user->can('delete-users')) {

            $user = User::findOrFail($id);

            User::destroy($id);

            Session::flash('message', trans('auth::ui.user.message_delete', array('name' => $user->firstname)));

            return redirect('auth/user');
        }

        return redirect('auth/logout');
    }

    public function show() {

        return \Theme::view('admin.user.form_change_password');

    }

    public function changePassword(Request $request) {

        $this->validate($request, [
            'password' => 'required|confirmed|min:5',
            'password_confirmation' => 'required|min:5',
        ]);

        $user = User::findOrFail(Auth::user()->id);

        $data = array(
            'password' => \Hash::make($request->input('password'))
        );

        $user->update($data);

        Session::flash('message', trans('auth::ui.user.message_change_password'));

        return redirect('auth/user/change-password');
    }
}