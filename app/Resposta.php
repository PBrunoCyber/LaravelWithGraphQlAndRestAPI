<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    protected $guarded = [];

    public function user_envia(){
        return $this->belongsTo(Imagem::class);
    }

    public function user_recebe(){
        return $this->belongsTo(PerfilCliente::class);
    }

    public function mensagem(){
        return $this->belongsTo(Mensagem::class);
    }

}
