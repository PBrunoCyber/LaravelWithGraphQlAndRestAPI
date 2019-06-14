<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilCliente extends Model
{
    protected $fillable = [
        'imagem', 'user_id', 'cidade', 'estado', 'logradouro','telefone'
    ];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
