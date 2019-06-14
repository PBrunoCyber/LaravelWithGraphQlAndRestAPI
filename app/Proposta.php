<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
    protected $guarded = [];

    public function user_recebe(){
        return $this->belongsTo(Imagem::class);
    }

    public function user_envia(){
        return $this->belongsTo(PerfilCliente::class);
    }

    public function orcamento(){
        return $this->hasMany(Orcamento::class);
    }

}
