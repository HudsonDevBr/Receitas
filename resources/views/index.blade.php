@extends('layout.layoutnovo')

@section('principal')

<div class="row">
    <div class="banner">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="receita/9">
                        <img class="imgBanner" src="{{ asset('img/assets/Banner1.jpg') }}" alt="banner Bolo de Laranja">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="titulobanner">Arroz Soltinho</h2>
                        <p class="descriaocbanner">para quem está começando, não deixar grudar é um grande desafio. Siga o passo a passo para acertar na próxima tentativa:</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="receita/2">
                        <img class="imgBanner" src="{{ asset('img/assets/Banner2.jpg') }}" alt="banner Bolo de Laranja">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="titulobanner">Bolo De Laranja</h5>
                        <p class="descriaocbanner">Bolo de laranja molhado e bem fofinho! Quem não adora um bolo simples,    sem recheio,  sem coberturas complicadas, Bolo de Laranja é  simples de fazer e fácil de comer, ainda quente. </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="destaque">
        <div class="destaque-titulo">
            <h2>Destaques</h2>
        </div>
        <div class="cards">
            @foreach ($destaques as $r)
            <a href="receita/{{$r->id}}">
                <div class="fotocard">
                    <img src="/storage/{{ $r->foto}}" width="200" height="150" alt="{{ $r->nome}}">
                </div>
                <div class="descricaocard">
                    <p class="titulocard">{{$r->nome}}</p>
                    <p class="tempocard">Preparo {{$r->tempoPreparo}} minutos</p>
                    <p class="rendcard">Rendimento {{$r->rendimento}} porções</p>
                    <p class="rendcard">{{$r->visualizacoes}} visualizações</p>
                    <p class="catcard">{{$r->categoria->nome}}</p>
                </div>
            </a>
            @endforeach
            </div>
    </div>
</div>
<div class="categoriasLinha">
    <div class="maisvistos">
        <h2 class="maisvistostitulo">Mais Vistos</h2>
    </div>
    <div class="cardVerticais">
        @foreach ($maisPedidos as $r)
            <a href="receita/{{$r->id}}">
                <div>
                    <div class="fotoCardVertical">
                        <img src="/storage/{{ $r->foto}}" width="200" height="150" alt="{{ $r->nome}}">
                    </div>
                    <div class="tituloCardVertical">
                        <p class="nomeCardVertical">{{$r->nome}}</p>
                        <p class="tempoCardVertical">Preparo {{$r->tempoPreparo}} minutos</p>
                        <p class="rendCardVertical">Rendimento {{$r->rendimento}} porções</p>
                        <p class="rendCardVertical">{{$r->visualizacoes}} visualizações</p>
                        <p class="catCardVertical">{{$r->categoria->nome}}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
<div class="categoriasLinha">
    <div class="maisvistos">
        <h2 class="maisvistostitulo">Receitas Rápidas</h2>
    </div>
    <div class="cardVerticais">
        @foreach ($rapidas as $r)
            <a href="receita/{{$r->id}}">
                <div>
                    <div class="fotoCardVertical">
                        <img src="/storage/{{ $r->foto}}" width="200" height="150" alt="{{ $r->nome}}">
                    </div>
                    <div class="tituloCardVertical">
                        <p class="nomeCardVertical">{{$r->nome}}</p>
                        <p class="tempoCardVertical">Preparo {{$r->tempoPreparo}} minutos</p>
                        <p class="rendCardVertical">Rendimento {{$r->rendimento}} porções</p>
                        <p class="rendCardVertical">{{$r->visualizacoes}} visualizações</p>
                        <p class="catCardVertical">{{$r->categoria->nome}}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
    <script >$(document).ready(function(){
        $('#carouselExampleFade').carousel({interval: 10000});
    });</script>
@endsection
