<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    function index ($stateId) {
        $cities = City::select(
            'cities.name as name',
            'cities.ddd_id as id',
            'ddds.ddd'
        )
        ->join('ddds', 'ddds.id', '=', 'cities.ddd_id')
        ->where('state_id', $stateId)
        ->orderBy('name')
        ->get();

        if (!empty($cities)) {
            return response()->json($cities, 200);
        }

        return response()->json([], 500);
    }
}
