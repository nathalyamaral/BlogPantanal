<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 12 May 2019 02:33:13 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Permission
 * 
 * @property int $id
 * @property string $name
 * @property string $label
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $roles
 *
 * @package App\Models
 */
class Permission extends Eloquent
{
	protected $fillable = [
		'name',
		'label'
	];

	public function roles()
	{
		return $this->belongsToMany(\App\Models\Role::class, 'permission_role', 'permissions_id', 'roles_id')
					->withTimestamps();
	}
}
