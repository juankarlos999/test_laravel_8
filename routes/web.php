<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TecnicosController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FilePhotoController;

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

Route::get('/', [PageController::class, 'home']);

Route::get('/consultaorden', [PageController::class, 'consultaorden']);

Route::get('/comofunciona', [PageController::class, 'funcionamiento']);

Route::get('/nosotros', [PageController::class, 'nosotros']);

Route::get('/reparacion', [PageController::class, 'reparacion']);

Route::get('/tecnicos', [PageController::class, 'tecnicos']);

Route::get('/registro-tecnicos', [PageController::class, 'registertech'])->name('register-Technician');

Route::get('/menu-servicios-cliente', [PageController::class, 'clienteMenu_servicios'])->middleware('auth')->name('menu-services-constumers');

Route::get('/home-clientes', [PageController::class, 'clienteInicio'])->middleware('auth')->name('home-Customers');

Route::get('/home-tecnicos', [PageController::class, 'tecnicoInicio'])->middleware('auth')->name('home-Technician');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Rutas de prueba */
Route::get('/serviceOrder/serviceSummary', [PageController::class, 'serviceSummary']);

Route::get('/serviceOrder/indexService', [PageController::class, 'indexService']);


/* Clientes */
Route::get('clientes/edit', [ClienteController::class, 'edit'])->middleware('auth')->name('clientes.edit');

Route::put('clientes/{data_user}', [ClienteController::class, 'update'])->middleware('auth')->name('clientes.update');


/* Tecnicos */
Route::get('tecnicos/edit', [TecnicosController::class, 'edit'])->middleware('auth')->name('tecnicos.edit');

Route::get('clientes/detalle-tecnico{id}/{appliance}', [TecnicosController::class, 'show'])->middleware('auth')->name('list-technician.show');

Route::post('/registro-tecnicos', [TecnicosController::class, 'create'])->name('register-Technician.create');

Route::get('clientes/listado-proveedores/{typeServices}/{appliance}', [TecnicosController::class, 'index'])->middleware('auth')->name('list-technician');

Route::put('tecnicos/update{data_user}/{data_technician}', [TecnicosController::class, 'update'])->middleware('auth')->name('tecnicos.update');


/* Orden de servicio */
Route::post('clientes/crear-orden-servicio/tecnico{id}/{appliance}', [OrderController::class, 'create'])->name('new_order.create');


/* Archivo de imagen tecnico */

//Route::put('tecnicos/file-update', [FilePhotoController::class, 'update'])->name('img.update');

