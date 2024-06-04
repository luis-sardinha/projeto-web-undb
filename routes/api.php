<?php

use App\Http\Controllers\LivroController;
use App\Http\Controllers\AutorController;

Route::apiResource('livros', LivroController::class);
Route::apiResource('autores', AutorController::class);
