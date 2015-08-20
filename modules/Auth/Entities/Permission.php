<?php namespace Modules\Auth\Entities;
   
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission {

	protected $table = 'permissions';

    protected $fillable = ['name', 'display_name', 'description'];

    public function roles() {

    	return $this->belongsToMany('Modules\Auth\Entities\Role', 'permission_role');
    }

}