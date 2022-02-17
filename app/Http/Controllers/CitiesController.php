<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    function index ($stateId) {
        $cities = City::select('name', 'ddd_id')->where('state_id', $stateId)->get();

        if (!empty($cities)) {
            return response()->json($cities, 200);
        }

        return response()->json([], 500);
    }
}
