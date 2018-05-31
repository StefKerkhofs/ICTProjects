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
            'name' => 'u',
            'email' => 'root',
            'password' => bcrypt('root'),
            'function' => 'Begeleider'
        ]);
        //Stefan Segers = 2
        DB::table('users')->insert([
            'name' => 'u0067341',
            'email' => 'u0067341@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'Begeleider'
        ]);

        //Andrey Sereda = 3
        DB::table('users')->insert([
            'name' => 'r0615163',
            'email' => 'r0615163@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'Reiziger'
        ]);

        //Daan Vandenbosch = 4
        DB::table('users')->insert([
            'name' => 'r0664592',
            'email' => 'r0664592@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'Reiziger'
        ]);

        //Joren Meynen = 5
        DB::table('users')->insert([
            'name' => 'r0674424',
            'email' => 'r0674424@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'Reiziger'
        ]);

        //Kaan Akpinar = 6
        DB::table('users')->insert([
            'name' => 'r0577574',
            'email' => 'r0577574@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'Reiziger'
        ]);

        //Luca Thielens = 7
        DB::table('users')->insert([
            'name' => 'r0666244',
            'email' => 'r0666244@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'Reiziger'
        ]);

        //Michiel Guilliams = 8
        DB::table('users')->insert([
            'name' => 'r0668515',
            'email' => 'r0668515@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'Reiziger'
        ]);

        //Nick Castermans = 9
        DB::table('users')->insert([
            'name' => 'r0618569',
            'email' => 'r0618569@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'Reiziger'
        ]);

        //Nico Schelfhout = 10
        DB::table('users')->insert([
            'name' => 'r0679934',
            'email' => 'r0679934@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'Reiziger'
        ]);

        //Robin Machiels = 11
        DB::table('users')->insert([
            'name' => 'r0664407',
            'email' => 'r0664407@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'Reiziger'
        ]);

        //Sasha Van de Voorde = 12
        DB::table('users')->insert([
            'name' => 'r0673786',
            'email' => 'r0673786@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'Reiziger'
        ]);

        //Stef Kerkhofs = 13
        DB::table('users')->insert([
            'name' => 'r0658314',
            'email' => 'r0658314@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'Reiziger'
        ]);

        //Yoeri op't Roodt = 14
        DB::table('users')->insert([
            'name' => 'r0663911',
            'email' => 'r0663911@ucll.be',
            'password' => bcrypt('azertyuiop'),
            'function' => 'Reiziger'
        ]);
        //gebruiker = 15
        DB::table('users')->insert([
            'name' => 'gebruiker',
            'email' => 'gebruiker@ucll.be',
            'password' => bcrypt('gebruiker'),
            'function' => 'Gebruiker'
        ]);
    }
}
