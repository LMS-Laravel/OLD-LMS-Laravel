<?php

namespace Modules\User\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Modules\Course\Entities\Lesson;
use Webpatser\Countries\Countries;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Carbon\Carbon;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;
    use EntrustUserTrait;

    
    protected $table = 'users';

    protected $fillable = ['firstname', 'lastname', 'username', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    public function roles() {

        return $this->belongsToMany('Modules\User\Entities\Role', 'role_user');
    }

    public function country(){

        return $this->belongsTo(Countries::class);
    }

    public function getFullNameAttribute()
    {

        return $this->first_name .' '. $this->last_name;
    }

    public function getCreatedAtAttribute($attr)
    {

        return Carbon::parse($attr)->toFormattedDateString(); //Change the format to whichever you desire
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class)->withTimestamps();
    }
}
