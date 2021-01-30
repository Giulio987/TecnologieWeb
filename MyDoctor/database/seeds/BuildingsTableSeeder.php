<?php

use Illuminate\Database\Seeder;

class BuildingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buildings')->insert([[
            'street_address' => 'Via E.Duse',
            'street_number' => '12',
            'postal_code'   => '40121',
            'city'          => 'Bologna',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'street_address' => 'Via M.Ragusa',
            'street_number' => '246',
            'postal_code'   => '40121',
            'city'          => 'Bologna',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'street_address' => 'Via L.Milani',
            'street_number' => '98',
            'postal_code'   => '44100',
            'city'          => 'Ferrara',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ]]);
    }
}
