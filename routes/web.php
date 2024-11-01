<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\SuperAdminController;

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

/* HOMEPAGE RESOURCES */

Route::get('/', [HomeController::class, 'index'])->name('home');

/* CARS RESOURCES */
Route::get('/cars', [CarController::class, 'index'])->name('cars');
Route::get('/cars/{id}', [CarController::class, 'show'])->name('car.show');



/* SUPER ADMIN RESOURCES */
Route::get('/superadmin', [SuperAdminController::class, 'index'])->name('superAdmin.index');
Route::get('/superadmin/create', [SuperAdminController::class, 'create'])->name('superAdmin.create');
Route::get('/superadmin/{id}', [SuperAdminController::class, 'show'])->name('superAdmin.show');
Route::get('/superadmin/{id}/edit', [SuperAdminController::class, 'edit'])->name('superAdmin.edit');
Route::post('/superadmin', [SuperAdminController::class, 'store'])->name('superAdmin.store');
Route::put('/superadmin/{id}', [SuperAdminController::class, 'update'])->name('superAdmin.update');
Route::delete('/superadmin/{id}', [SuperAdminController::class, 'destroy'])->name('superAdmin.delete');
