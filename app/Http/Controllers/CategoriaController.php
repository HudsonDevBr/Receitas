<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\receita;

class CategoriaController extends Controller
{

    function index(){
        $destaques = receita::destaque();
        $cat = Categoria::all();
        return view('index' , compact('cat','destaques'));
    }

    function show($id){
        $cat = Categoria::find($id);

        return view('show', compact('cat') );
    }

    function busca(Request $request){

        $data = receita::busca($request->busca);

        return view('busca' , compact('data', 'request'));
    }
}
