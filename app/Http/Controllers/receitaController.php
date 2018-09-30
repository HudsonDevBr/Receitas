<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\receita;
use App\Categoria;


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
        $receitas = receita::all();

        return view('receitas.index' , compact('receitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rec = receita::all();
        $cat = Categoria::all();

        return view('receitas.create' , compact('rec','cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $receitas = receita::find($id);

        return view('receitas.show', compact('receitas') );
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
