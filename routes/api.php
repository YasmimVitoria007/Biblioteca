<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\MembroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/autor', [AutorController::class, 'store']);
Route::get('/autor', [AutorController::class, 'index']);
Route::get('/autor/find/{id}', [AutorController::class, 'show']);
Route::put('/autor', [AutorController::class, 'update']);
Route::delete('/autor/delete/{$id}', [AutorController::class, 'delete']);

Route::post('/livro', [LivroController::class, 'store']);
Route::get('/livro', [LivroController::class, 'index']);
Route::get('/livro/find/{$id}', [LivroController::class, 'show']);
Route::put('/livro', [LivroController::class, 'update']);
Route::get('/livro/delete/{$id}', [LivroController::class, 'delete']);

Route::post('/membro', [MembroController::class, 'store']);
Route::get('/membro', [MembroController::class, 'index']);
Route::get('/membro/find/{$id}', [MembroController::class, 'show']);
Route::put('/membro', [MembroController::class, 'update']);
Route::get('/membro/delete/{$id}', [MembroController::class, 'delete']);

Route::post('/emprestimo', [EmprestimoController::class, 'store']);
Route::get('/emprestimo', [EmprestimoController::class, 'index']);
Route::get('/emprestimo/find/{$id}', [EmprestimoController::class, 'show']);
Route::put('/emprestimo', [EmprestimoController::class, 'update']);
Route::get('/emprestimo/delete/{$id}', [EmprestimoController::class, 'delete']);
