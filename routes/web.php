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
use App\Http\Controllers\ArsenaisController;

Route::get('/', function () {
    return view('welcome', []);
});

Route::get('/monstros/all', [MonstrosController::class, 'index']);
Route::get('/monstros/dashboard', [MonstrosController::class, 'dashboard'])->middleware('auth');
Route::get('/monstros/create', [MonstrosController::class, 'create'])->middleware('auth');
Route::get('/monstros/{id}', [MonstrosController::class, 'show']);
Route::put('/monstros/update', [MonstrosController::class, 'update']);
Route::delete('/monstros/{id}', [MonstrosController::class, 'destroy']);
Route::post('/monstros', [MonstrosController::class, 'store']);


Route::get('/arsenais/all', [ArsenaisController::class, 'index']);
Route::get('/arsenais/dashboard', [ArsenaisController::class, 'dashboard'])->middleware('auth');;
Route::get('/arsenais/create', [ArsenaisController::class, 'create'])->middleware('auth');
Route::get('/arsenais/{id}', [ArsenaisController::class, 'show']);
Route::put('/arsenais/update', [ArsenaisController::class, 'update']);
Route::delete('/arsenais/{id}', [ArsenaisController::class, 'destroy']);
Route::post('/arsenais', [ArsenaisController::class, 'store']);


Route::get('/itens/all', [ItensController::class, 'index']);
Route::get('/itens/dashboard', [ItensController::class, 'dashboard'])->middleware('auth');;
Route::get('/itens/create', [ItensController::class, 'create'])->middleware('auth');
Route::get('/itens/{id}', [ItensController::class, 'show']);
Route::put('/itens/update', [ItensController::class, 'update']);
Route::delete('/itens/{id}', [ItensController::class, 'destroy']);
Route::post('/itens', [ItensController::class, 'store']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('dashboard');
});

Route::get('/phpinfo', function() {
    phpinfo();
});