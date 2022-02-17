<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Tariffs;
use Illuminate\Http\Request;

class TariffsController extends Controller
{
    function index ($dddOrigin, $dddDestiantion, $minutes, $planId = false) {
        try {
            $tariff = Tariffs::select(
                'price'
            )
            ->where('origin_ddd_id', $dddOrigin)
            ->where('destination_ddd_id', $dddDestiantion)
            ->first();

            if (empty($tariff)) throw new \Exception('Não foi possvivel encontrar uma tarifa para essas cidades');

            $price = number_format($tariff->price, 2);

            $plans = Plan::select('name', 'minutes');

            if ($planId != false) {
                $plans = $plans->where('id', $planId);
            }

            $plans = $plans->get();

            if (count($plans) <= 0) throw new \Exception('Plano não foi encontrado');

            $return = [
                'price' => number_format($price, 2, ',', '.'),
                'minutes' => $minutes,
                'withoutPlanValue' => number_format($minutes * $price, 2, ',', '.'),
                'plans' => []
            ];
            foreach ($plans as $plan) {
                $return['plans'][] = [
                    'planValue' => $this->calculatePrice($minutes, $plan, $price),
                    'planName' => $plan->name,
                ];
            }

            return response()->json($return, 200);
        } catch (\Throwable $th) {
            return response()->json(['msg' => $th->getMEssage()], 500);
        }
    }

    private function calculatePrice ($minutes, $plan, $price) {
        /**
         * Calculation to find the value with 10% per minute past the plane.
         */
        $value = ($minutes - $plan->minutes) * ($price / 100 * 110);

        return number_format($value < 0? 0 : $value, 2, ',', '.');
    }
}
