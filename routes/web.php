<?php

use App\Http\Controllers\BaseDeDatosController;
use App\Http\Controllers\FestividadController;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LugarController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\GastronomiaController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Symfony\Component\HttpKernel\Profiler\Profile;

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


Route::get('/', [PrincipalController::class, 'mostrarMenuPrincipal'])->name('principal');

// RUTAS PARA MOSTRAR
Route::get('lugares/index', 'App\Http\Controllers\LugarController@index');
Route::get('/lugares/mostrar', [LugarController::class, 'mostrar'])->name('lugar.mostrar');
Route::get('/festividades/mostrar', [FestividadController::class, 'mostrar'])->name('festividad.mostrar');
Route::get('/comidas/mostrar', [GastronomiaController::class, 'mostrar'])->name('gastronomia.mostrar');
Route::get('/hoteles/mostrar', [HotelController::class, 'mostrar'])->name('hotel.mostrar');
Route::get('/usuarios/mostrar', [UserController::class, 'mostrar'])->name('user.mostrar');
Route::get('/informacion/mostrar', [UserInfoController::class, 'mostrar'])->name('userinfo.mostrar');
Route::get('/perfiles/mostrar', [ProfileController::class, 'mostrar'])->name('profile.mostrar');


//RUTAS PARA AGREGAR
Route::get('festividades/agregar', 'App\Http\Controllers\FestividadController@agregar');
Route::get('lugares/agregar', 'App\Http\Controllers\LugarController@agregar');
Route::get('gastronomias/agregar', 'App\Http\Controllers\GastronomiaController@agregar');
Route::get('hoteles/agregar', 'App\Http\Controllers\HotelController@agregar');
Route::get('perfiles/agregar', 'App\Http\Controllers\ProfileController@agregar');
Route::get('usuarios/agregar', 'App\Http\Controllers\UserController@agregar');
Route::get('usuariosinfo/agregar', 'App\Http\Controllers\UserInfoController@agregar');


//RUTAS PARA INSERTAR
Route::post('/festividades', 'App\Http\Controllers\FestividadController@insert');
Route::post('/lugares', 'App\Http\Controllers\LugarController@insert');
Route::post('/gastronomias', 'App\Http\Controllers\GastronomiaController@insert');
Route::post('/hoteles', 'App\Http\Controllers\HotelController@insert');
Route::post('/perfiles', 'App\Http\Controllers\ProfileController@insert');
Route::post('/usuarios', 'App\Http\Controllers\UserController@insert');
Route::post('/usuariosinfo', 'App\Http\Controllers\UserInfoController@insert');


//RUTAS PARA EDITAR
Route::get('/festividad/editar/{festividad}', [FestividadController::class, 'editar'])->name('festividades.editar');


//RUTAS PARA ACTUALIZAR
Route::post('festividades/update' , 'App\Http\Controllers\FestividadController@update');

//RUTAS PARA ELIMINAR
Route::delete('/festividades/eliminar/{id}', [FestividadController::class, 'destroy'])->name('festividades.eliminar');
Route::delete('/gastronomias/eliminar/{id}', [GastronomiaController::class, 'destroy'])->name('gastronomias.eliminar');
Route::delete('/hoteles/eliminar/{id}', [HotelController::class, 'destroy'])->name('hoteles.eliminar');
Route::delete('/lugares/eliminar/{id}', [LugarController::class, 'destroy'])->name('lugares.eliminar');
Route::delete('/profiles/eliminar/{id}', [ProfileController::class, 'destroy'])->name('profiles.eliminar');
Route::delete('/users/eliminar/{id}', [UserController::class, 'destroy'])->name('users.eliminar');
Route::delete('/users/eliminar/{id}', [UserController::class, 'destroy'])->name('users.eliminar');
Route::delete('/userinfo/eliminar/{id}', [UserInfoController::class, 'destroy'])->name('usersinfo.eliminar');

//RUTAS DE TRANSACCIONES
Route::get('/hoteles-transaccion1', 'App\Http\Controllers\HotelController@transaccion1');
Route::get('/actualizarhotel', 'App\Http\Controllers\HotelController@transaccionModificar');
Route::get('/eliminar-hotel/{hotelId}', 'App\Http\Controllers\HotelController@eliminarHotel');


//VISTAS

Route::get('/mostrarVista1', 'App\Http\Controllers\VistasController@mostrarVista1');
Route::get('/mostrarVista2', 'App\Http\Controllers\VistasController@mostrarVista2');
Route::get('/mostrarVista3', 'App\Http\Controllers\VistasController@mostrarVista3');
Route::get('/mostrarVista4', 'App\Http\Controllers\VistasController@mostrarVista4');
Route::get('/mostrarVista5', 'App\Http\Controllers\VistasController@mostrarVista5');


//CONSULTAS RELACIONADAS

Route::get('/mostrarConsulta1', 'App\Http\Controllers\ConsultasController@mostrarUsuariosConPerfiles');
Route::get('/mostrarConsulta2', 'App\Http\Controllers\ConsultasController@mostrarHotelesConAdmin');
Route::get('/mostrarConsulta3', 'App\Http\Controllers\ConsultasController@mostrarLugaresConAdmin');

//VISTA DE BASE DE DATOS
Route::get('/BaseDeDatosCompleta', [BaseDeDatosController::class, 'InfoDataBase']);


Route::get('/user-profiles', 'App\Http\Controllers\UserController@getUserProfiles');


//RUTA DE DESCARGA DE BD
Route::get('/restaurar', 'App\Http\Controllers\DescargaDump@restaurar');
