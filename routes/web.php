<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

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

Route::get('/food', [FoodController::class, 'index']);
Route::get('/food/create', [FoodController::class, 'create'])->middleware('auth');
Route::post('/food', [FoodController::class, 'store'])->middleware('auth');
// slug below, to prevent "create" from being {id} slug.
Route::get('/food/{id}', [FoodController::class, 'show']);
Route::delete('/food/{id}', [FoodController::class, 'destroy'])->middleware('auth');



/**
 * Updated syntax in Laravel 8.x.x -> Above syntax for actions to classes updated.
 * Net Ninja Videos outdated syntax!
 */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
