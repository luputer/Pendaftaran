<?php


use App\Http\Controllers\Gurucontroller;
use App\Http\Controllers\SiswaController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/guru',[Gurucontroller::class, 'index'])->name('guru.index');
Route::get('/guru/tambah',[Gurucontroller::class, 'create'])->name('guru.create');
Route::post('/guru/tambah',[Gurucontroller::class, 'store'])->name('guru.store');
Route::get('/guru/{id}/edit', [GuruController::class, 'edit'])->name('guru.edit');
Route::put('/guru/{id}', [GuruController::class, 'update'])->name('guru.update');
Route::delete('/guru/{id}', [GuruController::class, 'destroy'])->name('guru.destroy');



Route::get('/siswa', [SiswaController::class, 'index'])
    ->name('siswa.index');
Route::get(
    '/siswa/tambah',
    [SiswaController::class, 'create']
)->name('siswa.create');

Route::post('/siswa', [SiswaController::class, 'store'])
    ->name('siswa.store');

Route::get('/siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');

Route::put('/siswa/{id}', [SiswaController::class, 'update'])
    ->name('siswa.update');

Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

