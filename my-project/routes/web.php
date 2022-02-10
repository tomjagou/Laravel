<?php

use App\Abstract\Opel;
use App\Abstract\VoitureFactory;
use App\Http\Controllers\Aggregation;
use App\Http\Controllers\Facade;
use App\Http\Controllers\SingletonController;
use App\Http\Controllers\SujetObserveur;
use App\Http\Controllers\voitureFactoryController;
use App\Models\Singleton;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/singleton', [SingletonController::class, 'singleton']);
Route::get('/voitureFactory', [voitureFactoryController::class, 'index']);
Route::get('/voitureFactory/{marque}', [voitureFactoryController::class, 'showVoiture']);
Route::get('/facade', [Facade::class, 'commander']);
Route::get('/aggregation', [Aggregation::class, 'index']);
Route::get('/sujetObserveur', [SujetObserveur::class, 'index']);