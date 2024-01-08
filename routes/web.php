<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'role'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);


    Route::controller(App\Http\Controllers\Admin\DosenController::class)->group(function () {
        Route::get('/dosen', 'index');
        Route::get('/dosen/create', 'create');
        Route::post('/dosen/add', 'store');
        Route::get('/dosen/{id}/edit', 'edit');
        Route::put('/dosen/{id}', 'update');
        Route::get('/dosen/{id}/delete', 'destroy');
    });

    Route::controller(App\Http\Controllers\Admin\ProdiController::class)->group(function () {
        Route::get('/prodi', 'index');
        Route::get('/prodi/create', 'create');
        Route::post('/prodi/add', 'store');
        Route::get('/prodi/{id}/edit', 'edit');
        Route::put('/prodi/{id}', 'update');
        Route::get('/prodi/{id}/delete', 'destroy');
    });

    Route::controller(App\Http\Controllers\Admin\MatkulController::class)->group(function () {
        Route::get('/matkul', 'index');
        Route::get('/matkul/create', 'create');
        Route::post('/matkul/add', 'store');
        Route::get('/matkul/{id}/edit', 'edit');
        Route::put('/matkul/{id}', 'update');
        Route::get('/matkul/{id}/delete', 'destroy');
    });

    Route::controller(App\Http\Controllers\Admin\MahasiswaController::class)->group(function () {
        Route::get('/mahasiswa', 'index');
        Route::get('/mahasiswa/create', 'create');
        Route::post('/mahasiswa/add', 'store');
        Route::get('/mahasiswa/{id}/edit', 'edit');
        Route::put('/mahasiswa/{id}', 'update');
        Route::get('/mahasiswa/{id}/delete', 'destroy');
    });
});