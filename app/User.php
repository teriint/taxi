<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Backpack\Base\app\Notifications\ResetPasswordNotification as ResetPasswordNotification;
use Backpack\CRUD\CrudTrait; 
use Spatie\Permission\Traits\HasRoles;

 
class User extends Authenticatable
{
    use Notifiable;
	use CrudTrait; // <----- this
    use HasRoles;
    protected $fillable = [
        'name', 'email', 'password',
    ];

     protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
    
    public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_users');
    }
 
    public function hasAccess(array $permissions, $all = true)
    {
        foreach ($this->roles as $role) {
            if($role->hasAccess($permissions)) {
                return true;	
            }
        }
        return false;
    }
 
    public function inRole(string $roleSlug)
    {
        return $this->roles()->where('slug', $roleSlug)->count() == 1;
    }
}
