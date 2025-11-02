<?php

use App\Http\Controllers\RegistrarUsuarioController;
use App\Http\Controllers\SessaoUsuarioController;
use Illuminate\Support\Facades\Route;

Route::view('/home', 'home');

Route::get('/registrar', [RegistrarUsuarioController::class, 'create']);
Route::post('/registrar', [RegistrarUsuarioController::class, 'store']);

Route::get('/login', [SessaoUsuarioController::class, 'create']);
Route::post('/login', [SessaoUsuarioController::class, 'store']);
Route::post('/logout', [SessaoUsuarioController::class, 'destroy']);