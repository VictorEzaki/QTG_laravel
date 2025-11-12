<?php

use App\Http\Controllers\RegistrarUsuarioController;
use App\Http\Controllers\SessaoUsuarioController;
use Illuminate\Support\Facades\Route;

Route::view('/categoria', 'categoria')->middleware('auth');
Route::view('/refeicao', 'refeicao')->middleware('auth');
Route::view('/receita', 'receita')->middleware('auth');

Route::get('/registrar', [RegistrarUsuarioController::class, 'create']);
Route::post('/registrar', [RegistrarUsuarioController::class, 'store']);

Route::get('/', [SessaoUsuarioController::class, 'create'])->name('login');
Route::post('/login', [SessaoUsuarioController::class, 'store']);
Route::post('/logout', [SessaoUsuarioController::class, 'destroy']);