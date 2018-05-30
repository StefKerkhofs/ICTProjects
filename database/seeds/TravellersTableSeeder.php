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
            'zip_code_id' => 1,
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
            'MedicalIssue' => false,
            'medical_info' => null
        ]);

        DB::table('travellers')->insert([
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 1,
            'user_id' => 2,
            'firstname' => 'jefke',
            'lastname' => 'azerty',
            'city' => 'diepenbeek',
            'country' => 'belgië',
            'address' => 'steenweg 125',
            'sex' => 'man',
            'phone' => '0476528790',
            'emergency_phone_1' => '0471593575',
            'emergency_phone_2' => '0473987654',
            'nationality' => 'engelsman',
            'birthdate' => '1995',
            'birthplace' => 'hasselt',
            'MedicalIssue' => false,
            'medical_info' => null
        ]);

        DB::table('travellers')->insert([
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 2,
            'user_id' => 3,
            'firstname' => 'joren',
            'lastname' => 'meynen',
            'city' => 'averbode',
            'country' => 'belgië',
            'address' => 'sprinkhaanstraat 15',
            'sex' => 'man',
            'phone' => '0474567892',
            'emergency_phone_1' => '0471852963',
            'emergency_phone_2' => '0471717171',
            'nationality' => 'belg',
            'birthdate' => '1998',
            'birthplace' => 'Diest',
            'MedicalIssue' => false,
            'medical_info' => null
        ]);

        DB::table('travellers')->insert([
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 1,
            'user_id' => 4,
            'firstname' => 'daan',
            'lastname' => 'vandenbosch',
            'city' => 'kijuhy',
            'country' => 'belgië',
            'address' => 'unybv',
            'sex' => 'man',
            'phone' => '0473974125',
            'emergency_phone_1' => '0479815232',
            'emergency_phone_2' => '0471632856',
            'nationality' => 'belg',
            'birthdate' => '1996',
            'birthplace' => 'Zichem',
            'MedicalIssue' => false,
            'medical_info' => null
        ]);
/*
        DB::table('travellers')->insert([
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 1,
            'user_id' => 1,
            'firstname' => 'michiel',
            'lastname' => 'guilliams',
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
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 1,
            'user_id' => 1,
            'firstname' => 'kaan',
            'lastname' => 'akpinar',
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
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 1,
            'user_id' => 1,
            'firstname' => 'duud',
            'lastname' => 'boio',
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
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 2,
            'user_id' => 1,
            'firstname' => 'duud',
            'lastname' => 'boio',
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
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 4,
            'user_id' => 1,
            'firstname' => 'duud',
            'lastname' => 'boio',
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
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 2,
            'user_id' => 1,
            'firstname' => 'duud',
            'lastname' => 'boio',
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
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 1,
            'user_id' => 1,
            'firstname' => 'duud',
            'lastname' => 'boio',
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
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 3,
            'user_id' => 1,
            'firstname' => 'duud',
            'lastname' => 'boio',
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
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 3,
            'user_id' => 1,
            'firstname' => 'duud',
            'lastname' => 'boio',
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
*/
    }
}
