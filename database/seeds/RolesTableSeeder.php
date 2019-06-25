<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	DB::table('roles')->insert(
            [
            	'id' => 1,
                'name' => 'admin',
                'label' => 'Todas as funções do site estão liberadas para este usuário.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );
        DB::table('roles')->insert(
            [
            	'id' => 2,
                'name' => 'editor',
                'label' => 'Este usuário pode gerenciar e publicar posts, comentários, mídia e também, gerenciar posts criados por outros usuários.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );
        DB::table('roles')->insert(
            [
            	'id' => 3,
                'name' => 'autor',
                'label' => 'Este nível permite ao usuário gerenciar e publicar posts criados por ele e mídia.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('roles')->insert(
            [
            	'id' => 4,
                'name' => 'colaborador',
                'label' => 'Cria, edita e deleta postagens, mas não pode publicar. O usuário deve esperar aprovação de um nível Editor ou Administrador.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('roles')->insert(
            [
            	'id' => 5,
                'name' => 'assinante',
                'label' => 'Apenas altera informações de seu próprio perfil e gerencia seus próprios comentários.',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );
    }
}
