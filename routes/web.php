<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AddressController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');

/* Students*/
Route::get('/perfil-estudiante', [StudentController::class, 'edit'])->middleware('auth')->name('student.edit');

Route::put('/actualizado-estudiante', [StudentController::class, 'update'])->middleware('auth')->name('student.update');

/* Address */
Route::post('/perfil-estudiante', [AddressController::class, 'create'])->name('address.create');

Route::put('/estudiante-actualizado', [AddressController::class, 'update'])->name('address.update');