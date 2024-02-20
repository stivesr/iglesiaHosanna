<?php

use App\Http\Controllers\ChurchController;
use App\Models\Church;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* 

Route::get('/', function () {
    return view('welcome');
});

*/

<<<<<<< HEAD
// CAMBIAR RUTA
Route::get('/churchCreate', [ChurchController::class, 'create' ]);

Route::post('/churchCreate', [ChurchController::class, 'create'])->name('churchCreate');
=======
// Navegation
Route::get('/churchHome', [ChurchController::class, 'home' ])->name('church.home');
Route::get('/churchCreate', [ChurchController::class, 'create' ])->name('church.create');
>>>>>>> 7b67ad357c7121925286c29d3f3b0797131bc320
