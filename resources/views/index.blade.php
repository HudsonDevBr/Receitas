@extends('layout.layoutnovo')

@section('principal')
<div class="cat">
        <ul>
            @foreach ($cat as $c)
                <li><a href="categorias/{{ $c->id}}">{{ $c->nome}}</a></li>
            @endforeach
        </ul>
    </div>
<div class="row">
    <div class="banner">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="receita/7">
                        <img src="{{ asset('img/assets/Banner1.png') }}"  height="auto" width="810" alt="banner Bolo de Laranja">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p>...</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="receita/2">
                        <img src="{{ asset('img/assets/Banner1.png') }}"  height="auto" width="810" alt="banner Bolo de Laranja">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p>...</p>
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
        <div class="row">
            <div class="destaque-titulo">
                <h2>Destaques</h2>
            </div>
            @foreach ($destaques as $r)
                <div class="cards">
                    <a href="receita/{{$r->id}}">
                        <div class="fotocard">
                            <img src="/storage/{{ $r->foto}}" width="200" height="150" alt="{{ $r->nome}}">
                        </div>
                        <div class="descricaocard">
                            <p class="titulocard">{{$r->nome}}</p>
                            <p class="tempocard">Preparo {{$r->tempoPreparo}} minutos</p>
                            <p class="rendcard">Rendimento {{$r->rend}} porções</p>
                            <p class="catcard">{{$r->categoria->nome}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div>
    <div class="maisvistos">
        <h2 class="maisvistostitulo">Mais Vistos</h2>
    </div>
    <div class="cardVerticais">
        @foreach ($destaques as $r)
            <a href="receita/{{$r->id}}">
                <div>
                    <div class="fotoCardVertical">
                        <img src="/storage/{{ $r->foto}}" width="330" height="250" alt="{{ $r->nome}}">
                    </div>
                    <div class="tituloCardVertical">
                        <p class="nomeCardVertical">{{$r->nome}}</p>
                        <p class="tempoCardVertical">Preparo {{$r->tempoPreparo}} minutos</p>
                        <p class="rendCardVertical">Rendimento {{$r->rend}} porções</p>
                        <p class="catCardVertical">{{$r->categoria->nome}}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $('#carouselExampleFade').carousel({interval: 2000});
        });
    </script>
@endsection
