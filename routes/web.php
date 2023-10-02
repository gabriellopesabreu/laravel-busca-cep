<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnderecoController;


Route::get('/', [EnderecoController::class, 'index'])->name(name:'home');

Route::get('/adicionar', [EnderecoController::class, 'adicionar'])->name(name:'adicionar');

Route::get('/buscar', [EnderecoController::class, 'buscar'])->name(name:'buscar');

Route::post('/salvar', [EnderecoController::class, 'salvar'])->name(name:'salvar');


