<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use App\Models\Cliente;
// use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function store(StoreClienteRequest $request): Cliente{

        // dd($request->all());

        $clientes = Cliente::create($request->all());

        return $clientes;
    }
}
