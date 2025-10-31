<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEtapaRequest;
use App\Models\Etapa;
use App\Models\Frete;
use App\Enums\FreteStatus;
use Illuminate\Http\JsonResponse;

// use Illuminate\Http\Request;

class EtapaController extends Controller
{
    public function store(StoreEtapaRequest $request):  JsonResponse | Etapa{
        $frete = Frete::find($request->frete_id);

        if ($frete->status == FreteStatus::ENTREGUE){
            return response()->json(["message" => "Não pode adicionar etapas a um frete que ja foi entregue"], 400);
        }

        $etapa = Etapa::create($request->all());
        $tipofretestatus = FreteStatus::fromName($request->tipo_etapa);
        $frete->update(["status"=>$tipofretestatus]);

        return $etapa;
    }
}
