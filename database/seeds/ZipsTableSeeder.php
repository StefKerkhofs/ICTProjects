<?php

use Illuminate\Database\Seeder;

class ZipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zips')->insert(array(
            'zip_code' => 3660,
            'zip_town' => 'Opglabbeek',
        ));
    }
}
