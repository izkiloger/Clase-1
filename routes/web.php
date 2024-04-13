<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class,'index']);
Route::get('/registrar',[RegistrarController::class,'index']);
Route::post('/registrar',[RegistrarController::class,'registrar'])->name ('registro');
