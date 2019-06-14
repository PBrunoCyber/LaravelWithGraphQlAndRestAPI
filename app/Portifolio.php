<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portifolio extends Model
{
    protected $fillable = [
        'titulo','descricao','imagens','imagem_id'
    ];

    protected $guarded = [];

    public function imagem(){
        return $this->belongsTo(Imagem::class);
    }

}
