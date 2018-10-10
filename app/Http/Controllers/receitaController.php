<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\receita;
use App\Categoria;
use Auth;


class receitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth',['only' => ['create']]);
    }


    public function index()
    {
        $categorias = Categoria::all();
        $receitas = receita::all();

        return view('receitas.index' , compact('receitas','categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('receitas.create' , compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mensagens = [
            'ingredientes.required' => 'Por favor digite os :attribute para enviar a receita',
            'modoPreparo.required' => 'Por favor digite o Modo de Preparo para enviar a receita',
            'required' => 'Por favor digite o :attribute para enviar a receita',
            'max' => 'Digite :attribute válido',
        ];
        $request->validate([
            'nome' => 'required|max:50',
            'tempoPreparo' => 'required|max:3',
            'rendimento' => 'required|max:3',
            'ingredientes' => 'required',
            'modoPreparo' => 'required'
        ], $mensagens);

        $path = $request->file('foto')->store('imagens', 'public');

        $receita = new receita();
        $receita->nome = $request->input('nome');
        $receita->tempoPreparo = $request->input('tempoPreparo');
        $receita->rendimento = $request->input('rendimento');
        $receita->ingredientes = $request->input('ingredientes');
        $receita->modoPreparo = $request->input('modoPreparo');
        $receita->categoria_id = $request->input('categoria_id');
        $receita->foto = $path;
        $receita->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //contador de Visitas
        $receitas = receita::find($id);
        if(!Auth::check()){
            $receitas->visualizacoes++;
            $receitas->save();

        }

        $categorias = Categoria::all();
        //tira as virgulas da variavel
        $receitas1 = $result = str_replace(",", "", $receitas->ingredientes);
        //coloca "<br />" em cada quebra de linha da variavel
        $IngredientesLinha = nl2br($receitas1);
        //transforma em array toda vez que existir um "<br />"
        $Ingredientes = explode('<br />', $IngredientesLinha);
        //coloca "<br />" em cada quebra de linha da variavel
        $ModoPreparoLinha = nl2br( $receitas->modoPreparo);
        //transforma em array toda vez que existir um "<br />"
        $ModoPreparo = explode('<br />', $ModoPreparoLinha);


        return view('receitas.show', compact('receitas','Ingredientes','ModoPreparo','categorias') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
