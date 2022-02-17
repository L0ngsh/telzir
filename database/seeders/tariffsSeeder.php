<?php

namespace Database\Seeders;

use App\Models\DDD;
use App\Models\Tariffs;
use Illuminate\Database\Seeder;

class tariffsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ddds = DDD::select('id')->get()->toArray();

        $newTariffs = [];
        for ($i = 0; $i < count($ddds); $i++) {
            for ($j = 0; $j < count($ddds); $j++) {
                if ($i != $j) {
                    $newTariffs[] = [
                        'origin_ddd_id' => $ddds[$i]['id'],
                        'destination_ddd_id' => $ddds[$j]['id'],
                        'price' => number_format((1 + mt_rand() / mt_getrandmax() * (3 - 1)), 2)
                    ];
                }
            }
        }

        Tariffs::insert($newTariffs);
    }
}
