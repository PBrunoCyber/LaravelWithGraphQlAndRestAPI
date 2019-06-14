<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $guarded = [];

    public function proposta(){
        return $this->belongsTo(Proposta::class);
    }
}
