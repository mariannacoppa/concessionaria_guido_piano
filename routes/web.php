<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarsController;

use App\Http\Controllers\ResellersController;

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
})->name('welcome');

Route::resource('/cars', CarsController::class);
Route::delete('cars/{car}', [CarsController::class, 'destroy'])->name('cars.destroy');

Route::resource('/resellers', ResellersController::class);