<?php

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
            'menu_name' => 'Info',
            'page_id' => 1,
        ));

        DB::table('menus')->insert(array(
            'menu_name' => 'Amerika 2017',
            'page_id' => 2,
        ));
        DB::table('menus')->insert(array(
            'menu_name' => 'Amerika 2018',
            'page_id' => 3,
        ));
    }
}
