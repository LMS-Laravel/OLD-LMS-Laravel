<?php namespace Modules\User\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Pingpong\Modules\Routing\Controller;
use Modules\User\Entities\Permission;
use Modules\User\Http\Requests\PermissionRequest;


class PermissionController extends Controller {

    public function __construct() {

        $this->middleware('auth');
    }
	
	public function index() {

        if(Auth::user()->can('read-permissions')) {

        $permissions = Permission::all();

		return view('auth::permission.index', compact('permissions'));
        }

        return redirect('auth/logout');
	}

	public function create() {

        if(Auth::user()->can('create-permissions')) {

        return view('auth::permission.create');
        }

        return redirect('auth/logout');
    }

    public function store(PermissionRequest $request) {

        if(Auth::user()->can('create-permissions')) {

        $data = Permission::create($request->all());

        $permission = Permission::findOrFail($data->id);

       Session::flash('message', trans('auth::ui.permission.message_create', array('name' => $permission->name)));

        return redirect('auth/permission/create');

        }

        return redirect('auth/logout');
	
    }

    public function edit($id) {

        if(Auth::user()->can('update-permissions')) {

        $permission = Permission::findOrFail($id);

        return view('auth::permission.edit', compact('permission'));

        }

        return redirect('auth/logout');
    }

    public function update($id, PermissionRequest $request) {

        if(Auth::user()->can('update-permissions')) {

        $permission = Permission::findOrFail($id);

        $permission->update($request->all());

        Session::flash('message', trans('auth::ui.permission.message_update', array('name' => $permission->name)));

        return redirect('auth/permission');

        }

        return redirect('auth/logout');
	
    }

    public function destroy($id) {

        if(Auth::user()->can('delete-permissions')) {
    	
    	$permission = Permission::findOrFail($id);

    	Permission::destroy($id);

    	Session::flash('message', trans('auth::ui.permission.message_delete', array('name' => $permission->name)));

        return redirect('auth/permission');

        }

        return redirect('auth/logout');
    }
	
}