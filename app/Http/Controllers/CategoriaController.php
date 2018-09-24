<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\receita;

class CategoriaController extends Controller
{

    function index(){
        $destaques = receita::orderby('id', 'desc' )->limit(6)->where('id' , '<' , 10)->where('foto', '<>' , 'NULL.jpg')->get();
        $cat = Categoria::all();
        $rec = receita::all();
        return view('index' , compact('cat','rec','destaques'));
    }

    function show($id){
        $cat = Categoria::find($id);

        return view('show', compact('cat') );
    }
}
