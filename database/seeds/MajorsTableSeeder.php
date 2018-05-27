<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MajorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('majors')->insert(
            array(
                'name' => 'ICT',
            )
        );
        DB::table('majors')->insert(
            array(
                'name' => 'ELO',
            )
        );
    }
}
