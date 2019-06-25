<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*user permissions*/ 
        DB::table('permissions')->insert(
            [
            	'id' => 1,
                'name' => 'create_user',
                'label' => 'Pode criar um novo usuário',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 2,
                'name' => 'edit_user',
                'label' => 'Pode editar as informações de um usuário',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 3,
                'name' => 'view_user',
                'label' => 'Pode visualizar seu próprio perfil ou de outro usuário',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 4,
                'name' => 'list_users',
                'label' => 'Pode listar todos os usuários do sistema',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 5,
                'name' => 'delete_user',
                'label' => 'Pode deletar um usuário',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 6,
                'name' => 'restore_user',
                'label' => 'Pode visualizar os usuários deletados e pode restaurar um usuário deletado',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );
        /*End user permissions*/ 
        

        /*post permissions*/ 
        DB::table('permissions')->insert(
            [
            	'id' => 7,
                'name' => 'create_post',
                'label' => 'Pode criar um post',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 8,
                'name' => 'publish_post',
                'label' => 'Pode publicar um post',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 9,
                'name' => 'edit_post',
                'label' => 'Pode editar um post',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 10,
                'name' => 'view_post',
                'label' => 'Pode visualizar um post',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 11,
                'name' => 'list_posts',
                'label' => 'Pode visualiar todos os posts do blog',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

    	DB::table('permissions')->insert(
            [
            	'id' => 12,
                'name' => 'delete_post',
                'label' => 'Pode deletar um post',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 13,
                'name' => 'restore_post',
                'label' => 'Pode visualizar os posts deletados e pode restaurar um post deletado',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );
        /*End user permissions*/ 

        /*Comments permissions*/
        DB::table('permissions')->insert(
            [
            	'id' => 14,
                'name' => 'comment_post',
                'label' => 'Pode realizar um comentário em um post',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 15,
                'name' => 'edit_comment',
                'label' => 'Pode editar um comentário',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 16,
                'name' => 'view_comment',
                'label' => 'Pode visualizar um comentário',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

    	DB::table('permissions')->insert(
            [
            	'id' => 17,
                'name' => 'delete_comment',
                'label' => 'Pode deletar um comentário',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 18,
                'name' => 'restore_comment',
                'label' => 'Pode restaurar um comentário deletado',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );
        /*End comments permissions*/
        

        /*Categories permissions*/
        DB::table('permissions')->insert(
            [
            	'id' => 19,
                'name' => 'create_category',
                'label' => 'Pode criar uma categoria de post',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 20,
                'name' => 'edit_category',
                'label' => 'Pode editar uma categoria de post',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 21,
                'name' => 'view_category',
                'label' => 'Pode visualizar as informações de uma categoria de post',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 22,
                'name' => 'list_Categories',
                'label' => 'Pode visualizar todas as categorias cadastradas',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

    	DB::table('permissions')->insert(
            [
            	'id' => 23,
                'name' => 'delete_category',
                'label' => 'Pode deletar uma categoria',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 24,
                'name' => 'restore_category',
                'label' => 'Pode visualizar todas as categorias deletedas e pode restaurar uma categoria deletada',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );
        /*End categories permissions*/


        /*Tags permissions*/
        DB::table('permissions')->insert(
            [
            	'id' => 25,
                'name' => 'create_tag',
                'label' => 'Pode criar uma tag',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 26,
                'name' => 'edit_tag',
                'label' => 'Pode editar uma tag',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 27,
                'name' => 'view_tag',
                'label' => 'Pode visualizar as informações de uma tag',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 28,
                'name' => 'list_tags',
                'label' => 'Pode visualizar todas as tags cadastradas',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

    	DB::table('permissions')->insert(
            [
            	'id' => 29,
                'name' => 'delete_tag',
                'label' => 'Pode deletar uma tag',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 30,
                'name' => 'restore_tag',
                'label' => 'Pode Pode visualizar todas as tags deletedas e pode restaurar uma tag deletada',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );
        /*End tags permissions*/

         /*Email permissions*/
         DB::table('permissions')->insert(
            [
            	'id' => 31,
                'name' => 'sending_email',
                'label' => 'Pode enviar um email',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );
        /*End Email permissions*/

        /*PermissionRoles permissions*/
        DB::table('permissions')->insert(
            [
            	'id' => 32,
                'name' => 'add_permission_role',
                'label' => 'Pode adicionar permissões a uma role',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 33,
                'name' => 'edit_permission_role',
                'label' => 'Pode editar uma permissão de uma role',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 34,
                'name' => 'view_permission_role',
                'label' => 'Pode visualizar todas as permissões de uma role',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('permissions')->insert(
            [
            	'id' => 35,
                'name' => 'delete_permission_role',
                'label' => 'Pode deletar permissões de uma role',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );
        /*End PermissionRoles permissions*/

        /*dashboard permissions*/
        DB::table('permissions')->insert(
            [
            	'id' => 36,
                'name' => 'access_dashboard',
                'label' => 'Pode acessar o painel de admin',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );
        /*End dashboard permissions*/
    }
}
