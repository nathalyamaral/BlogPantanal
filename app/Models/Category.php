<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 May 2019 23:57:38 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $posts
 *
 * @package App\Models
 */
class Category extends Eloquent
{
	protected $fillable = [
		'name'
	];

	public function posts()
	{
		return $this->hasMany(\App\Models\Post::class, 'categories_id');
	}
}
