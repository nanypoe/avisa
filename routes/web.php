<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

Route::get('/', [PaginaController::class, 'inicio'])->name('inicio');
Route::get('/mapa', [PaginaController::class, 'mapa'])->name('mapa');
Route::get('/promociones', [PaginaController::class, 'promociones'])->name('promociones');