<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class receita extends Model
{
    protected $fillable = [
        "nome", "foto", "tempoPreparo","rendimento","ingredientes","modoPreparo","categoria_id"
    ];
    protected $table = "receitas";

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }
    
    public static function rapidas()
    {
        return static::orderby('nome', 'asc' )->limit(3)->where('tempoPreparo' , '<' , 21)->get();
    }

    public static function destaque()
    {
        return static::limit(3)->inRandomOrder()->where('id' , '<' , 100)->where('id', '<>', [9, 2])->where('foto', '<>' , 'NULL.jpg')->get();
    }
    public static function maisPedidos()
    {
        return static::orderby('visualizacoes', 'desc' )->limit(3)->where('id' , '>' , 1)->where('foto', '<>' , 'NULL.jpg')->get();
    }
}
