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
        DB::table('zips')->insert([
            'zip_code' => 3660,
            'zip_town' => 'Opglabbeek',
        ]);

        DB::table('zips')->insert([
            'zip_code' => 3590,
            'zip_town' => 'Diepenbeek',
        ]);

        DB::table('zips')->insert([
            'zip_code' => 3500,
            'zip_town' => 'Hasselt',
        ]);

        DB::table('zips')->insert([
            'zip_code' => 3600,
            'zip_town' => 'Genk',
        ]);

        DB::table('zips')->insert([
            'zip_code' => 3271,
            'zip_town' => 'Zichem',
        ]);
    }
}
