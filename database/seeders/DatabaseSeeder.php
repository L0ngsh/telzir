<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            plansSeeder::class,
            statesSeeder::class,
            dddsSeeder::class,
            tariffsSeeder::class,
            citiesSeeder::class
        ]);
    }
}
