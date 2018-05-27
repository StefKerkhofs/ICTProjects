<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ZipCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zip_codes')->insert([
            'town' => 'Hasselt'
        ]);
        DB::table('zip_codes')->insert([
            'town' => 'Diepenbeek'
        ]);
        DB::table('zip_codes')->insert([
            'town' => 'Genk'
        ]);
        DB::table('zip_codes')->insert([
            'town' => 'Zichem'
        ]);
    }
}
