<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('users')->insert(
            [
                'id' => 1,
                'name' => 'Michael Douglas',
                'email' => 'michael@gmail.com',
                'password' => Hash::make('123456'),
                'image' => '',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );
        DB::table('users')->insert(
            [
                'id' => 2,
                'name' => 'Nathaly',
                'email' => 'nathaly@gmail.com',
                'password' => Hash::make('123456'),
                'image' => '',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );
        DB::table('users')->insert(
            [
                'id' => 3,
                'name' => 'Wesley',
                'email' => 'wesley@gmail.com',
                'password' => Hash::make('123456'),
                'image' => '',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );

        DB::table('users')->insert(
            [
                'id' => 4,
                'name' => 'Fer',
                'email' => 'fer@gmail.com',
                'password' => Hash::make('123456'),
                'image' => '',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );
    }
}