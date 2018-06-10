<?php

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
        DB::table('trips')->insert(array(
            'page_id' => 1,
            'trip_name' => 'Info',
            'trip_year' => '1',
            'trip_price' => '1',
            'trip_contact' => '',
            'is_active' => '1',
        ));
        DB::table('trips')->insert(array(
            'page_id' => 2,
            'trip_name' => 'Amerika 2017',
            'trip_year' => '2017',
            'trip_price' => '99',
            'trip_contact' => '',
            'is_active' => '0',
        ));
        DB::table('trips')->insert(array(
            'page_id' => 3,
            'trip_name' => 'Amerika 2018',
            'trip_year' => '2018',
            'trip_price' => '99',
            'trip_contact' => 'Amerika2018@ucll.be',
            'is_active' => '1',
        ));

    }
}
