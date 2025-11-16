<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\RefeicaoController;
use App\Http\Controllers\RegistrarUsuarioController;
use App\Http\Controllers\SessaoUsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/registrar', [RegistrarUsuarioController::class, 'create']);
Route::post('/registrar', [RegistrarUsuarioController::class, 'store']);

Route::get('/', [SessaoUsuarioController::class, 'create'])->name('login');
Route::post('/login', [SessaoUsuarioController::class, 'store']);
Route::post('/logout', [SessaoUsuarioController::class, 'destroy']);

Route::get('/categoria', [CategoriaController::class, 'create'])->middleware('auth');
Route::post('/categoria', [CategoriaController::class, 'store'])->middleware('auth');

Route::get('/refeicao', [RefeicaoController::class, 'create'])->middleware('auth');
Route::post('/refeicao', [RefeicaoController::class, 'store'])->middleware('auth');

Route::view('/receita', 'receita')->middleware('auth');