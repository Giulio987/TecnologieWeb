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
        DB::table('buildings')->insert([[
            'description' => 'Via E.Duse'
        ], [
            'description' => 'Angiologica'
        ], [
            'description' => 'Allergologica'
        ], [
            'description' => 'Cardiochirurgica'
        ], [
            'description' => 'Cardiologica'
        ], [
            'description' => 'Cardiologica con ECG'
        ], [
            'description' => 'Chirurgia vascolare'
        ], [
            'description' => 'Dermatologica'
        ], [
            'description' => 'Diabetologica'
        ], [
            'description' => 'Dietologica'
        ], [
            'description' => 'Epatologica'
        ], [
            'description' => 'Endocrinologica'
        ], [
            'description' => 'Ginecologica'
        ], [
            'description' => 'Gastroenterologica'
        ], [
            'description' => 'InfettivologiaMedico-sportiva'
        ], [
            'description' => 'Neurologica'
        ], [
            'description' => 'Oculistica'
        ], [
            'description' => 'Odontoiatrica'
        ], [
            'description' => 'Oncologica'
        ], [
            'description' => 'Ortopedica'
        ], [
            'description' => 'Ostetrica'
        ], [
            'description' => 'Pneumologica'
        ], [
            'description' => 'Psichiatrica'
        ], [
            'description' => 'Senologica'
        ], [
            'description' => 'Urologica'
        ]]);
    }
}
