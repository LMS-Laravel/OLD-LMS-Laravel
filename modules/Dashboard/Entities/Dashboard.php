<?php namespace Modules\Dashboard\Entities;
   
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dashboard extends Model {

    protected $table = 'dashboard';

    public static function getCountUsers() {

        return array(
            'num_users' => DB::table('users')->count(),
            'num_roles' => DB::table('roles')->count(),
            'num_permissions' => DB::table('permissions')->count()
        );
    }
}