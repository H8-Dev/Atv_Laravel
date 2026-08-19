<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\MedicoController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function (){
    return 200;
});

Route::get('/post', [PostController::class, 'index']);
Route::post('/post', [PostController::class, 'store']);
Route::get('/post/{id}', [PostController::class, 'show']);
Route::put('/post/{id}', [PostController::class, 'update']);
Route::delete('/post/{id}', [PostController::class, 'destroy']);

Route::get('/medico', [MedicoController::class, 'index']);
Route::post('/medico', [MedicoController::class, 'store']);
Route::get('/medico/{id}', [MedicoController::class, 'show']);
Route::put('/medico/{id}', [MedicoController::class, 'update']);
Route::delete('/medico/{id}', [MedicoController::class, 'destroy']);


Route::get('/paciente', [PacienteController::class, 'index']);
Route::post('/paciente', [PacienteController::class, 'store']);
Route::get('/paciente/{id}', [PacienteController::class, 'show']);
Route::put('/paciente/{id}', [PacienteController::class, 'update']);
Route::delete('/paciente/{id}', [PacienteController::class, 'destroy']);
