@extends('layout.layoutnovo')

@section('principal')
<div class="receitas">
    <div class="esquerda">
        <h2 class="tituloReceita">{{ $receitas->nome}}</h2>
        <h5 class="categoriaReceita">{{ $receitas->Categoria->nome}}</h5>
        <img src="/storage/{{$receitas->foto}}" alt="imagem de {{ $receitas->nome}}" width="400" height="auto">
        <div class="temposReceita">
            <p class="tempoReceita">Tempo de Preparo {{ $receitas->tempoPreparo}} minutos </p>
            <p class="rendReceita">Rendimento </br> {{ $receitas->rendimento }} Porções</p>
        </div>
        <p class="visualizações">{{ $receitas->visualizacoes}} visualizações</p>
        <br>
    </div>
    <div class="direita">
        <div class="ingredientesReceita">
            <h2>Ingredientes</h2>
            @foreach (  $Ingredientes as  $r)
                <p>{{ $r }}</p>
            @endforeach
        </div>
        <div class="modoprepReceita">
            <h2>Modo de Preparo</h2>
            <ol>
                @foreach (  $ModoPreparo as  $r)
                <li>{{ $r }}</li>
                @endforeach
            </ol>
        </div>
    </div>
</div>
    @endsection


