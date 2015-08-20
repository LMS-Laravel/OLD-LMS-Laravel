<?php

namespace Modules\Auth\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;
    use EntrustUserTrait;

    
    protected $table = 'users';

    protected $fillable = ['firstname', 'lastname', 'username', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    public function roles() {

        return $this->belongsToMany('Modules\Auth\Entities\Role', 'role_user');
    }
}
