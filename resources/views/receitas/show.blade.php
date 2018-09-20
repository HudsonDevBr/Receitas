@php
    $array = explode(',', $receitas->ingredientes);
@endphp
@php
    $array1 = explode(',', $receitas->modoPreparo);
@endphp
@extends('layout.layout')

@section('principal')
    <br><h1>{{ $receitas->nome}}</h1>
    <h5>Tempo de Preparo {{ $receitas->tempoPreparo }} min - {{ $receitas->rendimento }} Porções</h5>
    <img src="/storage/{{$receitas->foto}}" alt="imagem de {{ $receitas->nome}}" width="400" height="auto">
    <br>

    <div>
        <h2>Ingredientes</h2>
            @foreach (  $array as  $r)
                <p>{{ $r }}.</p>
            @endforeach
    </div>
    <div>
            <h2>Modo de Preparo</h2>
            @foreach (  $array1 as  $r)
                <p>{{ $r }}</p>
            @endforeach
    </div>
    <div class="mais">
        <p>Ver mais Receitas de <a href="../categorias/{{ $receitas->categoria_id }}">{{ $receitas->categoria->nome}}</a></p>
    </div>
@endsection


