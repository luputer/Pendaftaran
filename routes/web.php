<?php

use App\Http\Controllers\SiswaController;
use Database\Factories\SiswaFactory;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('tambahsiswa', 
[SiswaController::class, 'create'])
->name('siswa.create');
