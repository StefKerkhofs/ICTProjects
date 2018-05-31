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
            'firstname' => 'Stefan',
            'lastname' => 'Segers',
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
            'user_id' => 2,
            'firstname' => 'Andrey',
            'lastname' => 'Sereda',
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
            'user_id' => 3,
            'firstname' => 'Daan',
            'lastname' => 'Vandenbosch',
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
            'trip_id' => 1,
            'user_id' => 4,
            'firstname' => 'Joren',
            'lastname' => 'Meynen',
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
            'user_id' => 5,
            'firstname' => 'Kaan',
            'lastname' => 'Akpinar',
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

        DB::table('travellers')->insert([
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 1,
            'user_id' => 6,
            'firstname' => 'Luca',
            'lastname' => 'Thielens',
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

        DB::table('travellers')->insert([
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 1,
            'user_id' => 7,
            'firstname' => 'Michiel',
            'lastname' => 'Guilliams',
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

        DB::table('travellers')->insert([
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 1,
            'user_id' => 8,
            'firstname' => 'Nick',
            'lastname' => 'Castermans',
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

        DB::table('travellers')->insert([
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 1,
            'user_id' => 9,
            'firstname' => 'Nico',
            'lastname' => 'Schelfhout',
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

        DB::table('travellers')->insert([
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 1,
            'user_id' => 10,
            'firstname' => 'Robin',
            'lastname' => 'Machiels',
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

        DB::table('travellers')->insert([
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 1,
            'user_id' => 11,
            'firstname' => 'Sasha',
            'lastname' => 'Van de Voorde',
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

        DB::table('travellers')->insert([
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 1,
            'user_id' => 12,
            'firstname' => 'Stef',
            'lastname' => 'Kerkhofs',
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

        DB::table('travellers')->insert([
            'zip_code_id' => 1,
            'study_id' => 1,
            'trip_id' => 1,
            'user_id' => 13,
            'firstname' => 'Yoeri',
            'lastname' => 'op\'t Roodt',
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


    }
}
