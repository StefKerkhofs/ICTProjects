<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'root',
            'email' => 'root@root.root',
            'password' => bcrypt('root'),
            'function' => 'root'
        ]);
        DB::table('users')->insert([
            'name' => 'r0214567',
            'email' => 'joren.meynen@telenet.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'root'
        ]);
        DB::table('users')->insert([
            'name' => 'r14856252',
            'email' => 'jefke@test.test',
            'password' => bcrypt('azertyuiop'),
            'function' => 'root'
        ]);
        DB::table('users')->insert([
            'name' => 'r4752147',
            'email' => 'azerty@test.test',
            'password' => bcrypt('azertyuiop'),
            'function' => 'root'
        ]);
    }
}
