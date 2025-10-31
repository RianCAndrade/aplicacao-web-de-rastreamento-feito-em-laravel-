<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frete;


class RastreamentoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $codigo_rastreio = $request->input("codigo_rastreio", "");

        $frete = Frete::where("codigo_rastreio", $codigo_rastreio)->with("etapas")->first();

        if(!$frete){
            return redirect()->back()->with("error", "O frete não foi encontrado");
        }

        // dd($frete->etapas);


        return view("frete.rastreamento", [
            "frete" => $frete
        ]);
    }
}
