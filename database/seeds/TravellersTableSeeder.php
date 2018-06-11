<?php

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
            'zip_id' => 1,
            'major_id' => 1,
            'trip_id' => 1,
            'user_id' => 1,
            'firstname' => 'Stefan',
            'lastname' => 'Segers',
            'country' => 'belgië',
            'address' => 'sprinkhaanstraat 15',
            'sex' => 'man',
            'phone' => '0474567892',
            'emergency_phone_1' => '0471852963',
            'emergency_phone_2' => '0471717171',
            'nationality' => 'belg',
            'birthdate' => '01/01/2000',
            'birthplace' => 'Diest',
            'medical_issue' => false,
            'medical_info' => null
        ]);

        DB::table('travellers')->insert([
            'zip_id' => 1,
            'major_id' => 1,
            'trip_id' => 2,
            'user_id' => 2,
            'firstname' => 'Andrey',
            'lastname' => 'Sereda',
            'country' => 'belgië',
            'address' => 'sprinkhaanstraat 15',
            'sex' => 'man',
            'phone' => '0474567892',
            'emergency_phone_1' => '0471852963',
            'emergency_phone_2' => '0471717171',
            'nationality' => 'belg',
            'birthdate' => '01/01/2000',
            'birthplace' => 'Diest',
            'medical_issue' => false,
            'medical_info' => null
        ]);

        DB::table('travellers')->insert([
            'zip_id' => 1,
            'major_id' => 1,
            'trip_id' => 1,
            'user_id' => 3,
            'firstname' => 'Daan',
            'lastname' => 'Vandenbosch',
            'country' => 'belgië',
            'address' => 'steenweg 125',
            'sex' => 'man',
            'phone' => '0476528790',
            'emergency_phone_1' => '0471593575',
            'emergency_phone_2' => '0473987654',
            'nationality' => 'engelsman',
            'birthdate' => '01/01/2000',
            'birthplace' => 'hasselt',
            'medical_issue' => false,
            'medical_info' => null
        ]);

        DB::table('travellers')->insert([
            'zip_id' => 1,
            'major_id' => 1,
            'trip_id' => 1,
            'user_id' => 4,
            'firstname' => 'Joren',
            'lastname' => 'Meynen',
            'country' => 'belgië',
            'address' => 'sprinkhaanstraat 15',
            'sex' => 'man',
            'phone' => '0474567892',
            'emergency_phone_1' => '0471852963',
            'emergency_phone_2' => '0471717171',
            'nationality' => 'belg',
            'birthdate' => '01/01/2000',
            'birthplace' => 'Diest',
            'medical_issue' => false,
            'medical_info' => null
        ]);

        DB::table('travellers')->insert([
            'zip_id' => 1,
            'major_id' => 1,
            'trip_id' => 1,
            'user_id' => 5,
            'firstname' => 'Kaan',
            'lastname' => 'Akpinar',
            'country' => 'belgië',
            'address' => 'unybv',
            'sex' => 'man',
            'phone' => '0473974125',
            'emergency_phone_1' => '0479815232',
            'emergency_phone_2' => '0471632856',
            'nationality' => 'belg',
            'birthdate' => '01/01/2000',
            'birthplace' => 'Zichem',
            'medical_issue' => false,
            'medical_info' => null
        ]);

        DB::table('travellers')->insert([
            'zip_id' => 1,
            'major_id' => 1,
            'trip_id' => 2,
            'user_id' => 6,
            'firstname' => 'Luca',
            'lastname' => 'Thielens',
            'country' => 'belgië',
            'address' => 'unybv',
            'sex' => 'man',
            'phone' => '0473974125',
            'emergency_phone_1' => '0479815232',
            'emergency_phone_2' => '0471632856',
            'nationality' => 'belg',
            'birthdate' => '01/01/2000',
            'birthplace' => 'Zichem',
            'medical_issue' => false,
            'medical_info' => null
        ]);

        DB::table('travellers')->insert([
            'zip_id' => 1,
            'major_id' => 1,
            'trip_id' => 1,
            'user_id' => 7,
            'firstname' => 'Michiel',
            'lastname' => 'Guilliams',
            'country' => 'belgië',
            'address' => 'unybv',
            'sex' => 'man',
            'phone' => '0473974125',
            'emergency_phone_1' => '0479815232',
            'emergency_phone_2' => '0471632856',
            'nationality' => 'belg',
            'birthdate' => '01/01/2000',
            'birthplace' => 'Zichem',
            'medical_issue' => false,
            'medical_info' => null
        ]);

        DB::table('travellers')->insert([
            'zip_id' => 1,
            'major_id' => 1,
            'trip_id' => 1,
            'user_id' => 8,
            'firstname' => 'Nick',
            'lastname' => 'Castermans',
            'country' => 'belgië',
            'address' => 'unybv',
            'sex' => 'man',
            'phone' => '0473974125',
            'emergency_phone_1' => '0479815232',
            'emergency_phone_2' => '0471632856',
            'nationality' => 'belg',
            'birthdate' => '01/01/2000',
            'birthplace' => 'Zichem',
            'medical_issue' => false,
            'medical_info' => null
        ]);

        DB::table('travellers')->insert([
            'zip_id' => 1,
            'major_id' => 1,
            'trip_id' => 2,
            'user_id' => 9,
            'firstname' => 'Nico',
            'lastname' => 'Schelfhout',
            'country' => 'belgië',
            'address' => 'unybv',
            'sex' => 'man',
            'phone' => '0473974125',
            'emergency_phone_1' => '0479815232',
            'emergency_phone_2' => '0471632856',
            'nationality' => 'belg',
            'birthdate' => '01/01/2000',
            'birthplace' => 'Zichem',
            'medical_issue' => false,
            'medical_info' => null
        ]);

        DB::table('travellers')->insert([
            'zip_id' => 1,
            'major_id' => 1,
            'trip_id' => 1,
            'user_id' => 10,
            'firstname' => 'Robin',
            'lastname' => 'Machiels',
            'country' => 'belgië',
            'address' => 'unybv',
            'sex' => 'man',
            'phone' => '0473974125',
            'emergency_phone_1' => '0479815232',
            'emergency_phone_2' => '0471632856',
            'nationality' => 'belg',
            'birthdate' => '01/01/2000',
            'birthplace' => 'Zichem',
            'medical_issue' => false,
            'medical_info' => null
        ]);

        DB::table('travellers')->insert([
            'zip_id' => 1,
            'major_id' => 1,
            'trip_id' => 2,
            'user_id' => 11,
            'firstname' => 'Sasha',
            'lastname' => 'Van de Voorde',
            'country' => 'belgië',
            'address' => 'unybv',
            'sex' => 'man',
            'phone' => '0473974125',
            'emergency_phone_1' => '0479815232',
            'emergency_phone_2' => '0471632856',
            'nationality' => 'belg',
            'birthdate' => '01/01/2000',
            'birthplace' => 'Zichem',
            'medical_issue' => false,
            'medical_info' => null
        ]);

        DB::table('travellers')->insert([
            'zip_id' => 1,
            'major_id' => 1,
            'trip_id' => 2,
            'user_id' => 12,
            'firstname' => 'Stef',
            'lastname' => 'Kerkhofs',
            'country' => 'belgië',
            'address' => 'unybv',
            'sex' => 'man',
            'phone' => '0473974125',
            'emergency_phone_1' => '0479815232',
            'emergency_phone_2' => '0471632856',
            'nationality' => 'belg',
            'birthdate' => '01/01/2000',
            'birthplace' => 'Zichem',
            'medical_issue' => false,
            'medical_info' => null
        ]);

        DB::table('travellers')->insert([
            'zip_id' => 1,
            'major_id' => 1,
            'trip_id' => 2,
            'user_id' => 13,
            'firstname' => 'Yoeri',
            'lastname' => 'op\'t Roodt',
            'country' => 'belgië',
            'address' => 'unybv',
            'sex' => 'man',
            'phone' => '0473974125',
            'emergency_phone_1' => '0479815232',
            'emergency_phone_2' => '0471632856',
            'nationality' => 'belg',
            'birthdate' => '01/01/2000',
            'birthplace' => 'Zichem',
            'medical_issue' => false,
            'medical_info' => null
        ]);
    }
}
