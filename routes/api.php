<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EtapaController;
use App\Http\Controllers\FreteController;

Route::get("/olamundo", function(){
    return response()->json(["message: " => "Ola Mundo"]);
});

Route::post("/clientes", [ClienteController::class, "store"]);
Route::post("/frete", [FreteController::class, "store"]);
Route::post("/etapa", [EtapaController::class, "store"]);