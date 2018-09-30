@extends('layout.layoutnovo')

@section('principal')
    <div class="categoria">
            <br>
        <h2>CATEGORIA - {{ $cat->nome }}</h2>
        <ul>
            @foreach ($cat->receita as $r)
                <li id="receita"><a href="../receita/{{ $r->id }}">{{$r->nome}}</a></li>
            @endforeach
            <script>
                if (document.getElementById("receita") == null) {
                    document.write('Não existem Receitas nessa categoria')
                }
            </script>
        </ul>
        <div class="btmvoltar"><a href="/">Voltar</a></div>
    </div>
    <div class="espaco"></div>

@endsection
