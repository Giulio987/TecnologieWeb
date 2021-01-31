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
        $this->call(BuildingsTableSeeder::class);
        $this->call(DoctorsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MedicinesTableSeeder::class);
        $this->call(SpecialistsTableSeeder::class);
        
    }
}
