<?php

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

Route::get('lugares/index', 'App\Http\Controllers\LugarController@index');
Route::get('lugares/mostrar', 'App\Http\Controllers\LugarController@mostrar');
Route::get('festividades/mostrar', 'App\Http\Controllers\FestividadController@mostrar');
Route::get('comidas/mostrar', 'App\Http\Controllers\GastronomiaController@mostrar');
Route::get('hoteles/mostrar', 'App\Http\Controllers\HotelController@mostrar');
Route::get('usuarios/mostrar', 'App\Http\Controllers\UserController@mostrar');
Route::get('informacion/mostrar', 'App\Http\Controllers\UserInfoController@mostrar');

Route::get('/restaurarbase', 'App\Http\Controllers\DescargaDump@restaurar');
