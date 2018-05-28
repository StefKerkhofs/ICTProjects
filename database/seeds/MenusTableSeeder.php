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
            'menu_name' => 'info',
        ));

        DB::table('menus')->insert(array(
            'menu_id' => '2',
            'page_id' => '2',
            'menu_name' => 'Amerika',
        ));

        DB::table('menus')->insert(array(
            'menu_id' => '3',
            'page_id' => '3',
            'menu_name' => 'Europa',
        ));
    }
}
