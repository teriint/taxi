<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
   protected $fillable = [
        'name', 'permissions',
    ];
    protected $casts = [
        'permissions' => 'array',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_users');
    }
    
   
 
    public function hasAccess(array $permissions, $all = true)
    {
        foreach ($permissions as $permission) {
            if ($this->hasPermission($permission))
                return true;
        }
        return false;
    }
 
    private function hasPermission(string $permission, $all = true)
    {
        return $this->permissions[$permission] ?? false;
    }
}
