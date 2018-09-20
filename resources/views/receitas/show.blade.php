@extends('layout.layout')

@section('principal')
    <br><h1>{{ $receitas->nome}}</h1>
    <h5>Tempo de Preparo {{ $receitas->tempoPreparo }} min - {{ $receitas->rendimento }} Porções</h5>
    <img src="/storage/{{$receitas->foto}}" alt="imagem de {{ $receitas->nome}}">
    <br>

    <div>
        <h2>Ingredientes</h2>
        <p>{{$receitas->ingredientes}}</p>
    </div>
    <div>
        <h2>Modo de Preparo</h2>
        <p>{{$receitas->modoPreparo}}</p>

    ver mais Receitas de <a href="../categorias/{{ $receitas->categoria_id }}">{{ $receitas->categoria->nome}}</a>
    </div>
@endsection


