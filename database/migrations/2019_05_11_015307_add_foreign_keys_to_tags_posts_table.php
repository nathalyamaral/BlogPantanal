<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTagsPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tags_posts', function(Blueprint $table)
		{
			$table->foreign('posts_id')->references('id')->on('posts')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('tags_id')->references('id')->on('tags')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tags_posts', function(Blueprint $table)
		{
			$table->dropForeign('posts_id');
			$table->dropForeign('tags_id');
		});
	}

}
