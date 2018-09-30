@extends('layout.layout')

@section('principal')

<br>
<h1>Resultado da Busca por "{{$request->busca}}"</h1>
<br>
    <ol >
@foreach ($data as $b)
    <li id="busca"><a class="listatodasreceitas" href="receita/{{$b->id}}">{{$b->nome}}</a></li>

@endforeach
    </ol>
<script>
    if (document.getElementById("busca") === null) {
        document.write('Não temos receitas com esse nome tente procurar por outro nome!')
    }
</script>

@endsection
