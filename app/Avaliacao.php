<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $guarded = [];


    public function user_avalia(){
        return $this->belongsTo(PerfilCLiente::class);
    } 
    
    public function user_avaliado(){
        return $this->belongsTo(Imagem::class);
    } 

}
