<?php namespace Modules\User\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserDatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->permissionsUserSeeder();
        $this->permissionsRoleSeeder();
        $this->permissionsSeeder();
        $this->permissionsAllSeeder();
        $this->rolesSeeder();
        $this->addPermissionRoleSeeder();
		$this->usersSeeder();
		$this->roleUserSeeder();
	}

	private function permissionsUserSeeder(){

		DB::table('permissions')->insert(array(
            'name' => 'create-users',
            'display_name' => 'Create Users',
            'description' => 'Create users',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ));

		DB::table('permissions')->insert(array(
            'name' => 'read-users',
            'display_name' => 'Read Users',
            'description' => 'List Users',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ));

        DB::table('permissions')->insert(array(
            'name' => 'update-users',
            'display_name' => 'Update Users',
            'description' => 'Update Users',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ));

        DB::table('permissions')->insert(array(
            'name' => 'delete-users',
            'display_name' => 'Delete Users',
            'description' => 'Delete Users',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ));
	}

    private function permissionsRoleSeeder(){

        DB::table('permissions')->insert(array(
            'name' => 'create-roles',
            'display_name' => 'Create Roles',
            'description' => 'Create Roles',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ));

        DB::table('permissions')->insert(array(
            'name' => 'read-roles',
            'display_name' => 'Read Roles',
            'description' => 'List Roles',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ));

        DB::table('permissions')->insert(array(
            'name' => 'update-roles',
            'display_name' => 'Update Roles',
            'description' => 'Update Roles',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ));

        DB::table('permissions')->insert(array(
            'name' => 'delete-roles',
            'display_name' => 'Delete Roles',
            'description' => 'Delete Roles',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ));
    }

    private function permissionsSeeder(){

        DB::table('permissions')->insert(array(
            'name' => 'create-permissions',
            'display_name' => 'Create Permissions',
            'description' => 'Create Permissions',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ));

        DB::table('permissions')->insert(array(
            'name' => 'read-permissions',
            'display_name' => 'Read Permissions',
            'description' => 'List Permissions',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ));

        DB::table('permissions')->insert(array(
            'name' => 'update-permissions',
            'display_name' => 'Update Permissions',
            'description' => 'Update Permissions',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ));

        DB::table('permissions')->insert(array(
            'name' => 'delete-permissions',
            'display_name' => 'Delete Permissions',
            'description' => 'Delete Permissions',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ));
    }

    private function permissionsAllSeeder(){

        $name = 'Tables_in_'.env('DB_DATABASE', 'forge');
        $data = DB::select('SHOW TABLES WHERE '.$name.' NOT REGEXP "[[.low-line.]]"');

        foreach($data as $value) {

            if(($value->$name != 'users') && ($value->$name != 'migrations') &&
                ($value->$name != 'roles') && ($value->$name != 'permissions')) {
                DB::table('permissions')->insert(array(
                    'name' => 'create-'.$value->$name,
                    'display_name' => 'Create '.ucwords($value->$name),
                    'description' => 'Create '.ucwords($value->$name),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ));

                DB::table('permissions')->insert(array(
                    'name' => 'read-'.$value->$name,
                    'display_name' => 'Read '.ucwords($value->$name),
                    'description' => 'List '.ucwords($value->$name),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ));

                DB::table('permissions')->insert(array(
                    'name' => 'update-'.$value->$name,
                    'display_name' => 'Update '.ucwords($value->$name),
                    'description' => 'Update '.ucwords($value->$name),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ));

                DB::table('permissions')->insert(array(
                    'name' => 'delete-'.$value->$name,
                    'display_name' => 'Delete '.ucwords($value->$name),
                    'description' => 'Delete '.ucwords($value->$name),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ));
            }
        }
    }

	private function rolesSeeder(){

		DB::table('roles')->insert(array(
            'name' => 'admin',
            'display_name' => 'Administrador',
            'description' => 'Administra los módulos de usuarios',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ));
	}

    private function addPermissionRoleSeeder(){

        for($i=1; $i < 13; $i++){
            DB::table('permission_role')->insert(array(
                'permission_id' => $i,
                'role_id' => 1
            ));
        }
    }

	private function usersSeeder(){

		DB::table('users')->insert(array(
            'first_name' => 'John',
            'last_name' => 'Doe',
            'username' => 'admin',
            'country_id' => 170,
            'email' => 'john_doe@demo.com',
            'password' => \Hash::make('admin123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ));
        	}

    private function roleUserSeeder(){

            DB::table('role_user')->insert(array(
                'user_id' => 1,
                'role_id' => 1
            ));
    }

}