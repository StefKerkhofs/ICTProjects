<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert(array(
            'menu_id' => '1',
            'page_id' => '1',
            'name' => 'info',
        ));
    }
}
