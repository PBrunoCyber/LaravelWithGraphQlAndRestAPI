<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Lance extends Model
{
    protected $guarded = [];

    public function proposta_categoria(){
        return $this->belongsTo(PropostaCategoria::class);
    }
    public function user_lance(){
        return $this->belongsTo(Imagem::class);
    }

}
