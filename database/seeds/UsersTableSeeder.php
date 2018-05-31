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
        //Stefan Segers = 1
        DB::table('users')->insert([
            'name' => 'u0067341',
            'email' => 'u0067341@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'root'
        ]);

        //Andrey Sereda = 2
        DB::table('users')->insert([
            'name' => 'r0615163',
            'email' => 'r0615163@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'root'
        ]);

        //Daan Vandenbosch = 3
        DB::table('users')->insert([
            'name' => 'r0664592',
            'email' => 'r0664592@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'root'
        ]);

        //Joren Meynen = 4
        DB::table('users')->insert([
            'name' => 'r0674424',
            'email' => 'r0674424@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'root'
        ]);

        //Kaan Akpinar = 5
        DB::table('users')->insert([
            'name' => 'r0577574',
            'email' => 'r0577574@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'root'
        ]);

        //Luca Thielens = 6
        DB::table('users')->insert([
            'name' => 'r0666244',
            'email' => 'r0666244@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'root'
        ]);

        //Michiel Guilliams = 7
        DB::table('users')->insert([
            'name' => 'r0668515',
            'email' => 'r0668515@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'root'
        ]);

        //Nick Castermans = 8
        DB::table('users')->insert([
            'name' => 'r0618569',
            'email' => 'r0618569@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'root'
        ]);

        //Nico Schelfhout = 9
        DB::table('users')->insert([
            'name' => 'r0679934',
            'email' => 'r0679934@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'root'
        ]);

        //Robin Machiels = 10
        DB::table('users')->insert([
            'name' => 'r0664407',
            'email' => 'r0664407@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'root'
        ]);

        //Sasha Van de Voorde = 11
        DB::table('users')->insert([
            'name' => 'r0673786',
            'email' => 'r0673786@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'root'
        ]);

        //Stef Kerkhofs = 12
        DB::table('users')->insert([
            'name' => 'r0658314',
            'email' => 'r0658314@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'root'
        ]);

        //Yoeri op't Roodt = 13
        DB::table('users')->insert([
            'name' => 'r0663911',
            'email' => 'r0663911@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'root'
        ]);
    }
}
