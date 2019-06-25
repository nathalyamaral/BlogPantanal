<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 12 May 2019 19:14:49 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tag
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
class Tag extends Eloquent
{
	protected $fillable = [
		'name'
	];

	public function posts()
	{
		return $this->belongsToMany(\App\Models\Post::class, 'tags_posts', 'tags_id', 'posts_id')
					->withTimestamps();
	}
}
