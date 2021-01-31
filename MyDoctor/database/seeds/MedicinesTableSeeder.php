<?php

use Illuminate\Database\Seeder;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([[
            'aic' => '24840074',
            'name' => 'CARDIOASPIRIN',
            'reference_packaging' => '30 UNITA 100 MG - USO ORALE',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'aic' => '24402137',
            'name' => 'EUTIROX',
            'reference_packaging' => '30 UNITA 100 MG - USO ORALE',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'aic' => '24402152',
            'name' => 'EUTIROX',
            'reference_packaging' => '50 UNITA 200 MCG - USO ORALE',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'aic' => '43315047',
            'name' => 'TRIATEC',
            'reference_packaging' => '28 UNITA 10 MG - USO ORALE',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'aic' => '43994019',
            'name' => 'NORVASC',
            'reference_packaging' => '14 UNITA 10 MG - USO ORALE',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'aic' => '23993037',
            'name' => 'LASIX',
            'reference_packaging' => '20 UNITA 500 MG - USO ORALE',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'aic' => '20465011',
            'name' => 'LASIX FIALE',
            'reference_packaging' => '5 UNITA 20 MG - USO PARENTERALE',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'aic' => '26803080',
            'name' => 'OMEPRAZEN',
            'reference_packaging' => '14 UNITA 10 MG - USO ORALE',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'aic' => '43388026',
            'name' => 'AUGMENTIN',
            'reference_packaging' => '12 UNITA (875+125) MG - USO ORALE',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'aic' => '36635062',
            'name' => 'DIBASE',
            'reference_packaging' => '1 UNITA 50.000UI - USO ORALE',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'aic' => '41972050',
            'name' => 'PANTORC',
            'reference_packaging' => '14 UNITA 20 MG - USO ORALE',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'aic' => '33007016',
            'name' => 'TORVAST',
            'reference_packaging' => '10 UNITA 10 MG - USO ORALE',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'aic' => '28511095',
            'name' => 'OKI',
            'reference_packaging' => '30 UNITA 80 MG - USO ORALE',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'aic' => '31825060',
            'name' => 'TACHIDOL',
            'reference_packaging' => '16 UNITA (500+30) MG - USO ORALE',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'aic' => '12745028',
            'name' => 'TACHIPIRINA',
            'reference_packaging' => '30 UNITA 500 MG - USO ORALE',
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ]]);
            
    }
}
