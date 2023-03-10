<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::group( ['middleware' => 'auth'],function () {


    Route::get('/productos/show/{id}',[ProductoController::class,'getShow']);
    Route::get('/productos/create', [ProductoController::class, 'getCreate']);
    Route::post('/productos/create', [ProductoController::class, 'postCreate']);
    Route::get('/productos/edit/{id}',[ProductoController::class, 'getEdit']);
    Route::put('/productos/edit/{request}',[ProductoController::class, 'putEdit']);

    Route::put('/productos/comprar/{id}',[ProductoController::class, 'putComprar']);




});
Route::get('/productos',[ProductoController::class,'getIndex']);
Route::get('/productos/categoria/{categoria}',[ProductoController::class,'getCategoria']);


Route::get('/', [HomeController::class, 'getHome']);
