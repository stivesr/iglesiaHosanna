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

Route::get('/churchHome', [ChurchController::class, 'home' ])->name('church.home');

Route::get('/churchCreate', [ChurchController::class, 'createView' ])->name('church.create');
Route::post('/churchCreate', [ChurchController::class, 'create'])->name('church.create');

Route::get('/churchRead', [ChurchController::class, 'readView' ])->name('church.read');
Route::post('/churchRead', [ChurchController::class, 'read'])->name('church.read');

Route::get('/churchUpdate', [ChurchController::class, 'updateView' ])->name('church.update');
Route::post('/churchUpdate', [ChurchController::class, 'update'])->name('church.update');

Route::get('/churchDelete', [ChurchController::class, 'deleteView' ])->name('church.delete');
Route::post('/churchDelete', [ChurchController::class, 'delete'])->name('church.delete');