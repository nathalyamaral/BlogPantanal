<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Permission;
use App\Traits\LockableTrait;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use SoftDeletes;
    use LockableTrait;
    
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
     	'name', 'email', 'password', 'image', 'biography'
     ];
     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
     protected $hidden = [
     	'password', 'remember_token',
     ];

     public function posts()
     {
     	return $this->hasMany(\App\Models\Post::class, 'users_id');
     }

     public function roles()
     {
     	return $this->belongsToMany(\App\Models\Role::class, 'role_user', 'users_id', 'roles_id')
     	->withTimestamps();
     }

     public function comments()
     {
          return $this->hasMany(\App\Models\Comment::class, 'users_id');
     }

     public function hasPermission(Permission $permission){
          return $this->hasAnyRoles($permission->roles);
     }

     public function hasAnyRoles($roles){
          if (is_array($roles) || is_object($roles)) {
               foreach ($roles as $role) {
                    return $this->roles->contains('name', $role->name);
               }
          }

          return $this->roles->contains('name', $roles);
     }
 }
