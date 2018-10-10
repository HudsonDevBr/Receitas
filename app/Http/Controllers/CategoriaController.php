<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categoria;
use App\receita;

class CategoriaController extends Controller
{
    function index()
    {
        $destaques = receita::destaque();
        $maisPedidos = receita::maisPedidos();
        $rapidas = receita::rapidas();
        $categorias = Categoria::all();
        return view('index' , compact('categorias','destaques','maisPedidos','rapidas'));
    }

    function show($id)
    {
        $categorias = Categoria::all();
        $cat = Categoria::find($id);

        return view('show', compact('cat','categorias') );
    }

    function busca(Request $request)
    {
                $categorias = Categoria::all();
        $data = receita::orderby( 'nome' , $request->ordem)->where('nome' , 'LIKE' , '%'.$request->busca. '%')->get();
        return view('busca' , compact('data', 'request','categorias','tipo'));
    }
}
