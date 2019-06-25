<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 12 May 2019 02:32:16 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Role
 * 
 * @property int $id
 * @property string $name
 * @property string $label
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $permissions
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class Role extends Eloquent
{
	protected $fillable = [
		'name',
		'label'
	];

	public function permissions()
	{
		return $this->belongsToMany(\App\Models\Permission::class, 'permission_role', 'roles_id', 'permissions_id')
					->withTimestamps();
	}

	public function users()
	{
		return $this->belongsToMany(\App\Models\User::class, 'role_user', 'roles_id', 'users_id')
					->withTimestamps();
	}
}
