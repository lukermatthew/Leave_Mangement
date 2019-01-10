<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([

            'name' => 'Administrator',
            'slug' => 'Administrator',

        ]);
        
        DB::table('roles')->insert([

            'name' => 'User',
            'slug' => 'User',

        ]);
    }
}
