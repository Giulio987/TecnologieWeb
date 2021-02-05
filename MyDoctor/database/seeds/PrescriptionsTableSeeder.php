<?php

use Illuminate\Database\Seeder;

class PrescriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prescriptions')->insert([[
            'id_user'       => '1',
            'id_doctor'     => '4',
            'description'   => 'oki',
            'status'        => 'confermata',
            'date'          => date('Y-m-d'),
        ]]);
    }
}

