<?php

use Illuminate\Database\Seeder;

class SpecialistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialists')->insert([[
            'description' => 'Via E.Duse',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Angiologica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Allergologica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Cardiochirurgica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Cardiologica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Cardiologica con ECG',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Chirurgia vascolare',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Dermatologica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Diabetologica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Dietologica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Epatologica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Endocrinologica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Ginecologica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Gastroenterologica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'InfettivologiaMedico-sportiva',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Neurologica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Oculistica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Odontoiatrica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Oncologica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Ortopedica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Ostetrica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Pneumologica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Psichiatrica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Senologica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'description' => 'Urologica',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ]]);
    }
}
