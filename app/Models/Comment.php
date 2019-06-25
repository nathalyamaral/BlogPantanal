<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 20 May 2019 13:33:18 -0400.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;
use App\Presenters\DatePresenter;
 
/**
 * Class Comment
 * 
 * @property int $id
 * @property string $body
 * @property int $user_id
 * @property int $post_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Comment extends Eloquent
{
	
	protected $fillable = [
		'body',
		'users_id',
		'posts_id'
	];

	public function post()
	{
		return $this->belongsTo(App\Models\Post::class, 'posts_id');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'users_id');
	}
}
