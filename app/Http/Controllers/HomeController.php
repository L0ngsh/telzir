<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\State;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $apiUrl = env('APP_URL').'/api/';

        $states = State::select('id', 'name', 'initials')->orderBy('initials')->get();
        $plans = Plan::select('id', 'name', 'description')->get();

        return view('home', compact('apiUrl', 'plans', 'states'));
    }
}
