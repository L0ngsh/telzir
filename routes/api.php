<?php

use App\Http\Controllers\CitiesController;
use App\Http\Controllers\DddsController;
use App\Http\Controllers\PlansController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\TariffsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/cities/{stateId}', [CitiesController::class, 'index'])->name('api.cities');
Route::post('/tariffs/{dddOrigin}/{dddDestination}/{minutes}/{planId?}', [TariffsController::class, 'index'])->name('api.tariffs');
