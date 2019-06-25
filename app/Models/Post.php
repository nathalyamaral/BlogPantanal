<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 11 May 2019 02:35:30 +0000.
 */

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Post
 * 
 * @property int $id
 * @property string $title
 * @property string $image_slug
 * @property string $body
 * @property int $users_id
 * @property int $categories_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Category $category
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $comments
 * @property \Illuminate\Database\Eloquent\Collection $tags
 *
 * @package App\Models
 */
class Post extends Eloquent
{
	use SoftDeletes;

	protected $casts = [
		'users_id' => 'int',
		'categories_id' => 'int'
	];

	protected $fillable = [
		'title',
		'image_slug',
		'body',
		'users_id',
		'view_role_id',	
		'categories_id'
	];

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class, 'categories_id');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'users_id');
	}

	public function comments()
	{
		return $this->hasMany(\App\Models\Comment::class, 'posts_id');
	}

	public function tags()
	{
		return $this->belongsToMany(\App\Models\Tag::class, 'tags_posts', 'posts_id', 'tags_id')
					->withTimestamps();
	}
}
