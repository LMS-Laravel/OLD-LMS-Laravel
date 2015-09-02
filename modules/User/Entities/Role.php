<?php namespace Modules\User\Entities;
   
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole {

	protected $table = 'roles';

    protected $fillable = ['name', 'display_name', 'description'];

    public function permissions() {

    	return $this->belongsToMany('Modules\User\Entities\Permission', 'permission_role');
    }

    public function users() {

        return $this->belongsToMany('Modules\User\Entities\User', 'role_user');
    }

}