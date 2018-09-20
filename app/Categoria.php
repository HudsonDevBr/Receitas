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
}
