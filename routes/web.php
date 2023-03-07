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

Route::get('/', [HomeController::class, 'getHome']);
// Route::get('/', function () {
//     return view('home');
// });

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/logout', function () {
    return  "esta es la pagina de logout";
});

Route::get('/productos',[ProductoController::class,'getIndex']);


Route::get('/productos/show/{id}',[ProductoController::class,'getShow']);


Route::get('/productos/create', [ProductoController::class, 'getCreate']);


Route::get('/productos/edit/{id}',[ProductosController::class, 'getEdit'] );

