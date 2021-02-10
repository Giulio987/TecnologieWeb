<?php

use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([[
            'fiscal_code'   => 'CHNLDE02H52B429N',
            'name'          => 'Elide',
            'surname'       => 'China',
            'email'         => 'elid.chin@tin.it',
            'gender'        => 'F',
            'dob'           => '1980-12-21',
            'phone_number'  => '051879211',
            'id_building'   => '1',
            'id_admin'      => '1',
            'password'      => bcrypt('doctor'),
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'fiscal_code'   => 'CHLLVC92M47C950A',
            'name'          => 'Ludovica',
            'surname'       => 'Chiellini',
            'email'         => 'ludovica.chiellini@gmail.com',
            'gender'        => 'F',
            'dob'           => '1963-08-27',
            'phone_number'  => '053277904',
            'id_building'   => '3',
            'id_admin'      => '1',
            'password'      => bcrypt('doctor'),
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [    
            'fiscal_code'   => 'CLVSDI28P61D491Y',
            'name'          => 'Iside',
            'surname'       => 'Claveri',
            'email'         => 'iside.claveri@aruba.it',
            'gender'        => 'F',
            'dob'           => '1933-07-21',
            'phone_number'  => '051634292',
            'id_building'   => '2',
            'id_admin'      => '1',
            'password'      => bcrypt('doctor'),
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ], [
            'fiscal_code'   => 'PRSTQT83D22C338N',
            'name'          => 'Torquato',
            'surname'       => 'Persichetti',
            'email'         => 'torquato.persichetti@yahoo.com',
            'gender'        => 'M',
            'dob'           => '1985-03-25',
            'phone_number'  => '051955064',
            'id_building'   => '2',
            'id_admin'      => '1',
            'password'      => bcrypt('doctor'),
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
            
        ],[
            'fiscal_code'   => 'BNCCTN08R06B859V',
            'name'          => 'Costantino',
            'surname'       => 'Boncio',
            'email'         => 'costantino.boncio@aruba.it',
            'gender'        => 'M',
            'dob'           => '1964-07-19',
            'phone_number'  => '0532380540',
            'id_building'   => '3',
            'id_admin'      => '1',
            'password'      => bcrypt('doctor'),
            'updated_at'    => date('Y-m-d h:s:i'),
            'created_at'    => date('Y-m-d h:s:i')
        ]]);
    }
}
