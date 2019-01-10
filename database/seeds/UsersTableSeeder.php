<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('users')->insert([

            'role_id' => '1',
            'name' => 'Administrator',
            'username' => 'Admin',
            'email' => 'admin@me.com',
            'password' => bcrypt('passw0rd'),
            
        ]);

        DB::table('users')->insert([

            'role_id' => '2',
            'name' => 'John Doe',
            'username' => 'user',
            'email' => 'user@me.com',
            'password' => bcrypt('passw0rd'),
        ]);
      
        
    }
}
