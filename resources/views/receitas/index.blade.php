@extends('layout.layout')

@section('principal')
<br>
    <h1>Todas as Receitas</h1>
<br>
    @foreach ($receitas as $r)
        <p><a class="listatodasreceitas" href="receita/{{ $r->id}}">{{ $r->nome }}</a></p>
    @endforeach
@endsection

