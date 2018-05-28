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
            'page_content' => 'Dit is content, hier komt html van de database.',
            'page_type' => 'html',
        ));
        DB::table('pages')->insert(array(
            'page_name' => 'amerika',
            'page_content' => 'testpdf.pdf',
            'page_type' => 'pdf',
        ));
    }
}
