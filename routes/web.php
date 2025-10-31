<?php

use App\Http\Controllers\HistoricoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RastreamentoController;

Route::get('/', HomeController::class);
Route::get("/rastreamento", RastreamentoController::class)->name("frete.rastreamento");
Route::get("/historicorastreamento", HistoricoController::class)->name("frete.historico");