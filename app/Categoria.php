<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        "nome"
    ];
    protected $table = "categorias";

    public function receita() {
        return $this->hasMany('App\receita');
    }

    public function maisVistos() {
        return $this->hasMany('App\receita')->orderby('id', 'desc' );
    }
    public function destaques() {
        return $this->hasMany('App\receita');
    }
}
