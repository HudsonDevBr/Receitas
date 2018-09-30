<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receitas - MuitoGostoso</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <nav>
    <div class="logo"><a href="/"><img src="{{url('img/assets/logo.png')}}" alt="logo compartilhe receitas" width="130"></a></div>
        <div class="nav">
            <form action="{{url('/busca')}}" class="pesquisa" method="get">
                <input type="text" class="fa form-control" placeholder=" Pesquisar                  &#xf002;" name="busca">
            </form>
            <ul>
                <li><a href="/login" ><i class="fa fa-user" aria-hidden="true" style="color: #fff"></i></a></li>
            </ul>
        </div>
    </nav>
    <div class="cat">
        <ul>
            @foreach ($cat as $c)
                <li><a href="categorias/{{ $c->id}}">{{ $c->nome}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="container">
        @yield('principal')
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
