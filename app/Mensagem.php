<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    protected $guarded = [];

    public function proposta_categoria(){
        return $this->belongsTo(PropostaCategoria::class);
    }
    
    public function user_envia(){
        return $this->belongsTo(PerfilCliente::class);
    }

    public function user_recebe(){
        return $this->belongsTo(Imagem::class);
    }

    public function resposta(){
        return $this->hasMany(Resposta::class);
    }

}
