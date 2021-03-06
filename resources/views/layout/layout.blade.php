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
        <div class="logo"><a href="/">Muito Gostoso</a></div>
        <div class="nav">
            <form action="{{url('/busca')}}" class="pesquisa" method="get">
                <input type="text" class="fa form-control" placeholder=" &#xf002; Pesquisar" name="busca">
            </form>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/receita/create">Enviar Receita</a></li>
                <li><a href="/login">Login</a></li>
                <li>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        @yield('categorias')
        @yield('principal')
    </div>


    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
