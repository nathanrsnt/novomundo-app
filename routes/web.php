<?php

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

use App\Http\Controllers\MonstrosController;
use App\Http\Controllers\ItensController;
use App\Http\Controllers\ArsenalController;

Route::get('/', function () {
    return view('welcome', []);
});

Route::get('/monstros', [MonstrosController::class, 'index']);
Route::get('/monstros/create', [MonstrosController::class, 'create']);

Route::get('/arsenal', [ArsenalController::class, 'index']);
Route::get('/arsenal/create', [ArsenalController::class, 'create']);

Route::get('/itens', [ItensController::class, 'index']);
Route::get('/itens/create', [ItensController::class, 'create']);