<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trips')->insert([
            'trip_name' => 'Amerika',
            'trip_year' => 2019,
            'trip_price' => 500,
            'is_active' => true,
            'trip_contact' => 'tripcontact.amerika@mail.be'
        ]);

        DB::table('trips')->insert([
            'trip_name' => 'Duitsland',
            'trip_year' => 2020,
            'trip_price' => 400,
            'is_active' => true,
            'trip_contact' => 'tripcontact.duitsland@mail.be'
        ]);

        DB::table('trips')->insert([
            'trip_name' => 'Italië',
            'trip_year' => 2019,
            'trip_price' => 400,
            'is_active' => false,
            'trip_contact' => 'tripcontact.italie@mail.be'
        ]);

        DB::table('trips')->insert(array(
            'trip_name' => 'amerika',
            'trip_year' => 2000,
            'trip_price' => 1000,
            'is_active' => true,
            'trip_contact'=>'kaan@akpinar.be',
        ));
    }
}
