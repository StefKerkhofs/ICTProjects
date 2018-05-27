<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StudiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('studies')->insert(
            array(
                'major_id' => 0,
                'name' => 'ELO-ICT'
            )
        );
        DB::table('studies')->insert(
            array(
                'major_id' => 1,
                'name' => 'ELO-ICT'
            )
        );
    }
}
