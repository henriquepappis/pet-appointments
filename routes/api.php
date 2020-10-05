<?php

use App\Http\Controllers\api\AtendimentoController;
use App\Http\Controllers\api\PetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/pet',[PetController::class, 'listAll']);
Route::get('/pet/{id}',[PetController::class, 'findById']);
Route::post('/pet',[PetController::class, 'create']);
Route::delete('/pet/{id}',[PetController::class, 'remove']);

# Atendimentos routes
Route::get('/atendimento',[AtendimentoController::class, 'listAll']);
Route::get('/atendimento/{id}',[AtendimentoController::class, 'findById']);
Route::post('/atendimento',[AtendimentoController::class, 'create']);
Route::delete('/atendimento/{id}',[AtendimentoController::class, 'remove']);
