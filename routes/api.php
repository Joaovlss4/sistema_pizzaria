<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

Route::prefix('/user')->group(function (){
    Route::get('/', [UserController::class, 'index']);
    Route::put('/atualizar/{id}', [UserController::class, 'update']);
    Route::delete('/deletar/{id}', [UserController::class, 'destroy']);
    Route::get('/visualizar/{id}', [UserController::class, 'show']);
    Route::post('/cadastrar', [UserController::class, 'store']);
});
Route::prefix('/pizza')->group(function(){
    Route::get('/', [PizzaController::class,'index']);
});