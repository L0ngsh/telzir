<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    function index () {
        $plans = Plan::select('id', 'name', 'description')->get();

        if (!empty($plans)) {
            return response()->json($plans, 200);
        }

        return response()->json([], 500);
    }
}
