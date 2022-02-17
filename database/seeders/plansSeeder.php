<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class plansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::insert([
            [
                'name' => 'FaleMais 30',
                'description' => 'Com FaleMais 30 você tem 30 minutos gratuitos para qualquer cidade.',
                'minutes' => 30
            ],

            [
                'name' => 'FaleMais 60',
                'description' => 'Com FaleMais 60 você tem 60 minutos gratuitos para qualquer cidade.',
                'minutes' => 60
            ],

            [
                'name' => 'FaleMais 120',
                'description' => 'Com FaleMais 120 você tem 120 minutos gratuitos para qualquer cidade.',
                'minutes' => 120
            ],
        ]);
    }
}
