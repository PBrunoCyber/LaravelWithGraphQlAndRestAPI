<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class PropostaCategoria extends Model
{
    protected $guarded = [];

    public function user_aceito(){
        return $this->belongsTo(Imagem::class);
    }

    public function user_envia(){
        return $this->belongsTo(PerfilCliente::class);
    }

    public function lances(){
        return $this->hasMany(Lance::class);
    }
	
	public function category(){
		return $this->belongsTo(Category::class);
	}

    protected $casts = [
        'data'  => 'date:d-m-Y',
    ];

}
