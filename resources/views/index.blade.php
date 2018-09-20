@extends('layout.layout')

@section('categorias')
    <div class="cat">
        <ul>
            @foreach ($cat as $c)
                <li><a href="categorias/{{ $c->id }}">{{ $c->nome }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection

@section('principal')
    <div class="banner">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/Banner1.jpg') }}"  height="300px" width="890px" alt="banner Bolo de Laranja">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>foto1</h5>
                        <p>...</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/Banner1.jpg') }}"  height="300px" width="890px" alt="banner Bolo de Laranja">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>foto2</h5>
                        <p>...</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/Banner1.jpg') }}"  height="300px" width="890px" alt="banner Bolo de Laranja">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>foto3</h5>
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
        <div class="destaque-titulo">
            <h2>Destaques</h2>
        </div>
        @foreach ($rec as $r)
            @if ($r->foto != 'NULL.jpg' && $r->id < 10)
                <div class="cards">
                    <h4 class="titulo-card"><a href="receita/{{ $r->id }}">{{ $r->nome }}</a></h4>
                    <div class="foto-card">
                        <img src="/storage/{{ $r->foto}}" width="280" height="180" alt="{{ $r->nome}}">
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $('#carouselExampleFade').carousel({interval: 2000});
        });
    </script>
@endsection
