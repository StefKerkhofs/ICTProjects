<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert(array(
            'page_name' => 'info',
            'page_content' => 'Dit is content',
            'page_type' => 'html',
        ));
    }
}
