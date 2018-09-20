<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\receita;

class CategoriaController extends Controller
{
    function index(){
        $cat = Categoria::all();
        $rec = receita::all();
        return view('index' , compact('cat','rec'));
    }

    function show($id){
        $cat = Categoria::find($id);
        
        return view('show', compact('cat') );
    }
}
