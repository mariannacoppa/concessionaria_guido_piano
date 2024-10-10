<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\ResellersController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\OptionalController;

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


Route::resource('/cars', CarController::class);
Route::delete('/cars/{car}', [CarController::class, 'destroy'])->name('cars.destroy');


Route::resource('/brands', BrandController::class);
Route::delete('/brands/{brand}', [BrandController::class, 'destroy'])->name('brands.destroy');


Route::resource('/optionals', OptionalController::class);
Route::delete('/optionals/{optional}', [OptionalController::class, 'destroy'])->name('optionals.destroy');
