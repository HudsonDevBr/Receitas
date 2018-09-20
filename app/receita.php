<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class receita extends Model
{
    protected $fillable = [
        "nome", "foto", "tempoPreparo","rendimento","ingredientes","modoPreparo","categoria_id"
    ];
    protected $table = "receitas";

    public function categoria() {

        return $this->belongsTo('App\Categoria');
    }
}
