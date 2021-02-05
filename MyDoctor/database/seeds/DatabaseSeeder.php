<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminsTableSeeder::class);
        $this->call(BuildingsTableSeeder::class);
        $this->call(DoctorsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PrescriptionsTableSeeder::class);
        
    }
}
