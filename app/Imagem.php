<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{

    protected $fillable = [
        'imagem', 'user_id', 'ramo', 'descricao', 'cidade', 'estado', 'logradouro', 'category_id','telefone'
    ];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function avaliacoes(){
        return $this->hasMany(Avaliacao::class);
    }

    public function portifolios(){
        return $this->hasMany(Portifolio::class);
    }

}
