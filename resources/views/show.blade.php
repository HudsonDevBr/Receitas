@extends('layout.layoutnovo')

@section('principal')

    <div class="categoria">
        <h2 categoriaDetalheTitulo>CATEGORIA - {{ $cat->nome }}</h2>
        <div class="catDetalhe" id="catDetalhe">
            <div class="destaqueCategoria">
                <div class="row">
                    <div class="destaque-tituloCategoria" id="destaque">
                        <h2>Destaques</h2>
                    </div>
                    @foreach ($cat->maisVistos as $r)
                    <div id="receita" class="cardsCategoria">
                        <a href="/receita/{{$r->id}}">
                            <div class="fotocardCategoria">
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
            <div class="MaisVistosCategoria">
                <div class="row" id="maisVistos">
                    <div class="destaque-tituloCategoria" >
                        <h2>Mais Vistos</h2>
                    </div>
                    @foreach ($cat->destaques as $r)
                    <div id="receita" class="cardsCategoria">
                        <a href="/receita/{{$r->id}}">
                            <div class="fotocardCategoria">
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
            @if (count($cat->maisVistos) < 1)
                <h4>Não temos receitas com esse nome tente procurar por outro nome!</h4>
            @endif
            <script>
                if (document.getElementById("receita") == null) {
                    document.getElementById("destaque").remove();
                    document.getElementById("maisVistos").remove();
                    document.getElementById("catDetalhe").style.flexDirection = "column";
                }
            </script>
        </div>
    </div>
    <div class="espaco"></div>
    <div class="btmvoltar"><a href="/">Voltar</a></div>

    @endsection
