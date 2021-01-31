<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'fiscal_code'        => 'BGNDRO62S65I321M',
            'name'               => 'Dora',
            'surname'            => 'Bagini',
            'email'              => 'dora.bagi@gmail.com',
            'dob'                => '1961-11-23',
            'phone_number'       => '0510848581',
            'gender'             => 'F',
            'street_address'     => 'Via P.Bonfante',
            'street_number'      => '248/b',
            'postal_code'        => '40121',
            'city'               => 'Bologna',
            'fiscal_code_doctor' => 'PRSTQT83D22C338N',
            'password'           => bcrypt('pazient'),
            'updated_at'         => date('Y-m-d h:s:i'),
            'created_at'         => date('Y-m-d h:s:i')
        ], [
        
            'fiscal_code'        => 'BGNMDL40C66A784V',
            'name'               => 'Maddalena',
            'surname'            => 'Bignotto',
            'email'              => 'm.bignotto@gmail.it',
            'dob'                => '1962-03-01',
            'phone_number'       => '0510848576',
            'gender'             => 'F',
            'street_address'     => 'Via Brianza',
            'street_number'      => '33',
            'postal_code'        => '40121',
            'city'               => 'Bologna',
            'fiscal_code_doctor' => 'CLVSDI28P61D491Y',
            'password'           => bcrypt('pazient'),
            'updated_at'         => date('Y-m-d h:s:i'),
            'created_at'         => date('Y-m-d h:s:i')
        ], [
            'fiscal_code'        => 'BLLVTR66L12I606G',
            'name'               => 'Valter',
            'surname'            => 'Bellafronte',
            'email'              => 'v.bellafronte@gmail.com',
            'dob'                => '1965-02-17',
            'phone_number'       => '0510656042',
            'gender'             => 'M',
            'street_address'     => 'Via A.Giordano',
            'street_number'      => '186',
            'postal_code'        => '40121',
            'city'               => 'Bologna',
            'fiscal_code_doctor' => 'CLVSDI28P61D491Y',
            'password'           => bcrypt('pazient'),
            'updated_at'         => date('Y-m-d h:s:i'),
            'created_at'         => date('Y-m-d h:s:i')
        ], [
            'fiscal_code'        => 'BLRTZN99D54E432Q',
            'name'               => 'Tiziana',
            'surname'            => 'Belardi',
            'email'              => 'tiziana.belardi@gmail.com',
            'dob'                => '1984-03-05',
            'phone_number'       => '0510848579',
            'gender'             => 'F',
            'street_address'     => 'Via A.Garibaldi',
            'street_number'      => '179/e',
            'postal_code'        => '40121',
            'city'               => 'Bologna',
            'fiscal_code_doctor' => 'CHNLDE02H52B429N',
            'password'           => bcrypt('pazient'),
            'updated_at'         => date('Y-m-d h:s:i'),
            'created_at'         => date('Y-m-d h:s:i')
        ], [
            'fiscal_code'        => 'BNFLSS64D62I219J',
            'name'               => 'Alessia',
            'surname'            => 'Bonforte',
            'email'              => 'alessia.bonforte@gmail.com',
            'dob'                => '1965-02-17',
            'phone_number'       => '0510848582',
            'gender'             => 'F',
            'street_address'     => 'Via Afrodite',
            'street_number'      => '292',
            'postal_code'        => '40121',
            'city'               => 'Bologna',
            'fiscal_code_doctor' => 'CHNLDE02H52B429N',
            'password'           => bcrypt('pazient'),
            'updated_at'         => date('Y-m-d h:s:i'),
            'created_at'         => date('Y-m-d h:s:i')
        ], [
            'fiscal_code'        => 'BNSTLD95M15E622F',
            'name'               => 'Tibaldo',
            'surname'            => 'Bonsignore',
            'email'              => 'tibaldo.bonsignore@libero.it',
            'dob'                => '1986-01-31',
            'phone_number'       => '0510848585',
            'gender'             => 'M',
            'street_address'     => 'Via F.Riso',
            'street_number'      => '211/h',
            'postal_code'        => '44100',
            'city'               => 'Ferrara',
            'fiscal_code_doctor' => 'CHLLVC92M47C950A',
            'password'           => bcrypt('pazient'),
            'updated_at'         => date('Y-m-d h:s:i'),
            'created_at'         => date('Y-m-d h:s:i')
        ], [
            'fiscal_code'        => 'BRCRNN64C54G084E',
            'name'               => 'Arianna',
            'surname'            => 'Bracone',
            'email'              => 'arianna.bracone@aruba.it',
            'dob'                => '1990-11-30',
            'phone_number'       => '0510848571',
            'gender'             => 'F',
            'street_address'     => 'Via Barbarigo',
            'street_number'      => '14',
            'postal_code'        => '44100',
            'city'               => 'Ferrara',
            'fiscal_code_doctor' => 'CHLLVC92M47C950A',
            'password'           => bcrypt('pazient'),
            'updated_at'         => date('Y-m-d h:s:i'),
            'created_at'         => date('Y-m-d h:s:i')
        ], [
            'fiscal_code'        => 'BRSDNA44C25H047K',
            'name'               => 'Adone',
            'surname'            => 'Borsari',
            'email'              => 'adone.borsari@aruba.it',
            'dob'                => '1938-11-14',
            'phone_number'       => '0510848583',
            'gender'             => 'M',
            'street_address'     => 'Via Val di Fassa',
            'street_number'      => '226',
            'postal_code'        => '44100',
            'city'               => 'Ferrara',
            'fiscal_code_doctor' => 'CHLLVC92M47C950A',
            'password'           => bcrypt('pazient'),
            'updated_at'         => date('Y-m-d h:s:i'),
            'created_at'         => date('Y-m-d h:s:i')
        ], [
            'fiscal_code'        => 'BRTLNE98E67H468M',
            'name'               => 'Eliana',
            'surname'            => 'Bertagnini',
            'email'              => 'eliana.bertagnini@yahoo.com',
            'dob'                => '1930-07-26',
            'phone_number'       => '0510958493',
            'gender'             => 'F',
            'street_address'     => 'Via G.Ragusa',
            'street_number'      => '47/b',
            'postal_code'        => '44100',
            'city'               => 'Ferrara',
            'fiscal_code_doctor' => 'BNCCTN08R06B859V',
            'password'           => bcrypt('pazient'),
            'updated_at'         => date('Y-m-d h:s:i'),
            'created_at'         => date('Y-m-d h:s:i')
        ], [
            'fiscal_code'        => 'BSCDLE74L41F419V',
            'name'               => 'Delia',
            'surname'            => 'Beschi',
            'email'              => 'dbeschi@teletu.it',
            'dob'                => '2005-07-15',
            'phone_number'       => '0510656032',
            'gender'             => 'F',
            'street_address'     => 'Via Derna',
            'street_number'      => '225',
            'postal_code'        => '44100',
            'city'               => 'Ferrara',
            'fiscal_code_doctor' => 'BNCCTN08R06B859V',
            'password'           => bcrypt('pazient'),
            'updated_at'         => date('Y-m-d h:s:i'),
            'created_at'         => date('Y-m-d h:s:i')
        ]]);
    }
}