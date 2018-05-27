<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TravellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('travellers')->insert([
            'zipcode_id' => 1,
            'study_id' => 1,
            'trip_id' => 1,
            'user_id' => 1,
            'firstname' => 'jos',
            'lastname' => 'potter',
            'city' => 'averbode',
            'country' => 'belgië',
            'address' => 'heesterweg 7',
            'sex' => 'man',
            'phone' => '0471487952',
            'emergency_phone_1' => '0472597432',
            'emergency_phone_2' => '0471652518',
            'nationality' => 'belg',
            'birthdate' => '1998',
            'birthplace' => 'Zichem',
            'MedicalIssue' => '',
            'medical_info' => ''
        ]);

        DB::table('travellers')->insert([
            'zipcode_id' => 1,
            'study_id' => 1,
            'trip_id' => 1,
            'user_id' => 1,
            'firstname' => 'jefke',
            'lastname' => 'azerty',
            'city' => 'averbode',
            'country' => 'belgië',
            'address' => 'heesterweg 7',
            'sex' => 'man',
            'phone' => '0471487952',
            'emergency_phone_1' => '0472597432',
            'emergency_phone_2' => '0471652518',
            'nationality' => 'belg',
            'birthdate' => '1998',
            'birthplace' => 'Zichem',
            'MedicalIssue' => '',
            'medical_info' => ''
        ]);
    }
}
