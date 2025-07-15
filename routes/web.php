<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\Gurucontroller;
use App\Http\Controllers\SiswaController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/guru', [Gurucontroller::class, 'index'])->name('guru.index');
// Route::get('/guru/tambah', [Gurucontroller::class, 'create'])->name('guru.create');
// Route::post('/guru/tambah', [Gurucontroller::class, 'store'])->name('guru.store');
// Route::get('/guru/{id}/edit', [GuruController::class, 'edit'])->name('guru.edit');
// Route::put('/guru/{id}', [GuruController::class, 'update'])->name('guru.update');
// Route::delete('/guru/{id}', [GuruController::class, 'destroy'])->name('guru.destroy');

Route::resource('dosen', DosenController::class);
Route::resource('guru', Gurucontroller::class);
Route::resource('siswa', SiswaController::class);
