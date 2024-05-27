<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::resource('/user', \App\Http\Controllers\UserController::class);
Route::resource('/kelas', \App\Http\Controllers\KelasController::class);
Route::resource('/matakuliah', \App\Http\Controllers\MatakuliahController::class);
