<?php namespace Modules\User\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Pingpong\Modules\Routing\Controller;
use Modules\User\Entities\Permission;
use Modules\User\Entities\Role;
use Modules\User\Http\Requests\RoleRequest;

class RoleController extends Controller {

    public function __construct() {

        $this->middleware('auth');
    }
	
	public function index() {

        if(Auth::user()->can('read-roles')) {

            $roles = Role::with('permissions')->get();

            return view('auth::role.index', compact('roles'));
        }

        return redirect('auth/logout');
	}

	public function create() {

        if(Auth::user()->can('create-roles')) {

		$permissions = Permission::lists('display_name', 'id');
		
		return view('auth::role.create', compact('permissions'));
        }

        return redirect('auth/logout');
	}

	public function store(RoleRequest $request) {

        if(Auth::user()->can('create-roles')) {

        $data = Role::create($request->all());

        $role = Role::findOrFail($data->id);

        $data->attachPermissions($request->input('permission_id'));

        Session::flash('message', trans('auth::ui.role.message_create', array('name' => $role->name)));

        return redirect('auth/role/create');
        }

        return redirect('auth/logout');
    }

    public function edit($id) {

        if(Auth::user()->can('update-roles')) {

        $role = Role::findOrFail($id);

        $role_permission = Role::find($id)->permissions()->lists('permission_id')->toArray();

        $permissions = Permission::lists('display_name', 'id');

        return view('auth::role.edit', compact('role', 'permissions', 'role_permission'));
        }

        return redirect('auth/logout');
    }

    public function update($id, RoleRequest $request){

        if(Auth::user()->can('update-roles')) {

            $role = Role::findOrFail($id);

            $role->update($request->all());

            if($role->permissions->count()) {

               $role->permissions()->detach($role->permissions()->lists('permission_id')->toArray());
            }

            $role->attachPermissions($request->input('permission_id'));

            Session::flash('message', trans('auth::ui.role.message_update', array('name' => $role->name)));

            return redirect('auth/role');

        }

        return redirect('auth/logout');
    }

    public function destroy($id) {

        if(Auth::user()->can('delete-roles')) {

        $role = Role::findOrFail($id);

        Role::destroy($id);

        Session::flash('message', trans('auth::ui.role.message_delete', array('name' => $role->display_name)));

        return redirect('auth/role');
        }

        return redirect('auth/logout');
    }
	
}