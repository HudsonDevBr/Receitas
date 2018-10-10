@extends('layout.layoutnovo')

@section('principal')

<br>
<h1>{{count($data)}} Resultado da Busca por "{{$request->busca}}"</h1>

<br>
    @if (count($data) < 1)
        <h4>Não temos receitas com esse nome tente procurar por outro nome!</h4>
    @endif
    <form action="{{url('/busca')}}" method="get" id="ordem">
        <input type="text" value="{{$request->busca}}" name="busca" hidden>
        <label for="ordem">Selecione a Ordem</label>
        <select name="ordem" id="ordem" onchange="this.form.submit()">
            <option selected disabled>Ordem</option>
            <option value="asc">A - Z</option>
            <option value="desc">Z - A</option>
        </select>

    </form>
    <ol >
    <div class="destaque">
            <div class="row">
                @foreach ($data as $b)
                <div id="busca" class="cards">
                    <a href="/receita/{{$b->id}}">
                        <div class="fotocard">
                            <img src="/storage/{{ $b->foto}}" width="200" height="150" alt="{{ $b->nome}}">
                        </div>
                        <div class="descricaocard">
                            <p class="titulocard">{{$b->nome}}</p>
                            <p class="tempocard">Preparo {{$b->tempoPreparo}} minutos</p>
                            <p class="rendcard">Rendimento {{$b->rend}} porções</p>
                            <p class="catcard">{{$b->categoria->nome}}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </ol>
<div class="espaco"></div>

@endsection
