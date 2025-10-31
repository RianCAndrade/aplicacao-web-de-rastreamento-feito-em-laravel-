<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Cliente extends Model
{
    protected $fillable = ["nome", "telefone"];

    public function enviados(){
        return $this->hasMany(Frete::class, "remetente_id");
    }

    public function recebidos(){
        return $this->hasMany(Frete::class, "destinatario_id");
    }
}
