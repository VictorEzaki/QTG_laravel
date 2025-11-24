<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DificuldadeController;
use App\Http\Controllers\ReceitaController;
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
Route::post('/categoria/store', [CategoriaController::class, 'store'])->middleware('auth');

Route::get('/refeicao', [RefeicaoController::class, 'create'])->middleware('auth');
Route::post('/refeicao', [RefeicaoController::class, 'store'])->middleware('auth');

Route::get('/dificuldade', [DificuldadeController::class, 'create'])->middleware('auth');
Route::post('/dificuldade', [DificuldadeController::class, 'store'])->middleware('auth');

Route::get('/receita', [ReceitaController::class, 'index'])->middleware('auth');
Route::get('/receita/show/{receita}', [ReceitaController::class, 'show'])->middleware('auth');
Route::get('/receita/create', [ReceitaController::class, 'create'])->middleware('auth');
Route::post('/receita/store', [ReceitaController::class, 'store'])->middleware('auth');