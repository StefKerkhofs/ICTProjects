<?php

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
            'page_name' => 'Info',
            'page_content' => 'test',
            'page_type' => 'html',
        ));

        DB::table('pages')->insert(array(
            'page_name' => 'Amerika 2017',
            'page_content' => 'b.pdf',
            'page_type' => 'pdf',
        ));
        DB::table('pages')->insert(array(
            'page_name' => 'Amerika 2018',
            'page_content' => '',
            'page_type' => 'pdf',
        ));
    }
}
