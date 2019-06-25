<?php

use Illuminate\Database\Seeder;

class Permission_RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 1, /* create_user */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 2, /* edit_user */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 3, /* view_user */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 4, /* list_users */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 5, /* delete_user */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 6, /*restore_user */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 7, /* create_post */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 8, /* publish_post */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 9, /* edit_post */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 10, /* view_post */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 11, /* list_posts */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 12, /* delete_post */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 13, /* restore_post */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 14, /*comment_post */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 15, /* edit_comment */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 16, /*view_comment */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 17, /*delete_comment*/
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 18, /*restore_comment */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 19, /* create_category */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 20, /*edit_category */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 21, /* view_category */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 22, /* list_Categories */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 23, /*delete_category */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 24, /* restore_category*/
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 25, /*create_tag */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 26, /* edit_tag */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 27, /* view_tag */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 28, /* list_tags */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 29, /*delete_tag */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 30, /*restore_tag */
                'roles_id' => 1 /* Administrador */
            ]
        );

        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 31, /* sending_email */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 32, /*add_permission_role */
                'roles_id' => 1 /* Administrador */
            ]
        );DB::table('permission_role')->insert(
            [
            	'permissions_id' => 33, /* edit_permission_role */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 34, /* view_permission_role */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 35, /* delete_permission_role */
                'roles_id' => 1 /* Administrador */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 36, /* access_dashboard */
                'roles_id' => 1 /* Administrador */
            ]
        );

        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 10, /* View_post */
                'roles_id' => 2 /* Editor */
            ]
        );
        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 9, /* Edit_post */
                'roles_id' => 2 /* Editor */
            ]
        );

        DB::table('permission_role')->insert(
            [
            	'permissions_id' => 10, /* View_post */
                'roles_id' => 3 /* autor */
            ]
        );
    }
}
