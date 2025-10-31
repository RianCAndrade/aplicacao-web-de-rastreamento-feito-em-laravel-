<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;


class HistoricoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $telefone = preg_replace("/\D/", "", $request->input("telefone", ""));

        $cliente = Cliente::where("telefone", $telefone)->with("enviados", "recebidos")->first();

        if(!$cliente){
            return redirect()->back()->with("error", "Cliente não encontrado");
        }


        return view("frete.historico", ["cliente" => $cliente]);
    }
}
