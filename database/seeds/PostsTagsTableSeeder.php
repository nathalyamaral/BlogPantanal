<?php

use Illuminate\Database\Seeder;

class PostsTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags_posts')->insert(
            [
                'id' => 1,
                'tags_id' => 1,
                'posts_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('tags_posts')->insert(
            [
                'id' => 2,
                'tags_id' => 3,
                'posts_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('tags_posts')->insert(
            [
                'id' => 3,
                'tags_id' => 6,
                'posts_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('tags_posts')->insert(
            [
                'id' => 4,
                'tags_id' => 4,
                'posts_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        

    }
}
