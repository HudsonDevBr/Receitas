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

    public static function busca($busca) {
        return static::where('nome' , 'LIKE' , '%'.$busca. '%')->get();
    }

    public static function destaque() {
        return static::orderby('id', 'desc' )->limit(3)->where('id' , '<' , 10)->where('foto', '<>' , 'NULL.jpg')->get();
    }
}
