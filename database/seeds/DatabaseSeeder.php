<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PagesTableSeeder::class,
            TripsTableSeeder::class,
            MajorsTableSeeder::class,
            StudiesTableSeeder::class,
            ZipsTableSeeder::class,
            MenusTableSeeder::class,
            TravellersTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}
