<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class StatesController extends Controller
{
    function index () {
        $states = State::select()->get();

        if (!empty($states)) {
            return response()->json($states, 200);
        }

        return response()->json([], 500);
    }
}
