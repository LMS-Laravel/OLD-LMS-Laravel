<?php namespace Modules\User\Entities;
   
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission {

	protected $table = 'permissions';

    protected $fillable = ['name', 'display_name', 'description'];

    public function roles() {

    	return $this->belongsToMany('Modules\User\Entities\Role', 'permission_role');
    }

}