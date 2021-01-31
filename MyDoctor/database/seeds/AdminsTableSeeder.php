<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([[
            'name'     => 'Rosaria',
            'email'    => 'rosaria.ciociola@edu.unife.it',
            'password' => bcrypt('password')
        ],[
            'name'     => 'Giuseppe',
            'email'    => 'giuseppe.giacalone@edu.unife.it',
            'password' => bcrypt('password')
        ],[
            'name'      => 'Giulio',
            'email'     => 'giulio.milani@edu.unife.it',
            'password'  => bcrypt('password')
        ]]);
    }    
}
