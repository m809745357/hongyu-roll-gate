<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$HA9HudXCf8vutJ47NneDp.qHqw0V3z1.Tt4SW/h8adeQWWsEuN5..',
                'name' => 'Administrator',
                'avatar' => NULL,
                'remember_token' => NULL,
                'created_at' => '2017-09-08 09:48:20',
                'updated_at' => '2017-09-08 09:48:20',
            ),
        ));
        
        
    }
}