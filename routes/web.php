<?php

use App\Http\Controllers\RegistrarUsuarioController;
use App\Http\Controllers\SessaoUsuarioController;
use Illuminate\Support\Facades\Route;

Route::view('/home', 'home')->middleware('auth');

Route::get('/registrar', [RegistrarUsuarioController::class, 'create']);
Route::post('/registrar', [RegistrarUsuarioController::class, 'store']);

Route::get('/login', [SessaoUsuarioController::class, 'create'])->name('login');
Route::post('/login', [SessaoUsuarioController::class, 'store']);
Route::post('/logout', [SessaoUsuarioController::class, 'destroy']);