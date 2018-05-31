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
<<<<<<< HEAD
            TripsTableSeeder::class
=======
            TripsTableSeeder::class,
            MajorsTableSeeder::class,
            StudiesTableSeeder::class,
            ZipsTableSeeder::class
>>>>>>> 318e1d97e9c17b96e07dace4f9a267a8f39d2845
        ]);
    }
}
