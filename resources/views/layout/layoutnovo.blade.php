<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compartilhe - Receitas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/all.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div id="bt_menu_principal">
        <input type="checkbox" id="bt_menu">
        <nav>
            <div class="bt_menu">
                <label for="bt_menu">&#9776;</label>
            </div>
            <div class="logo"><a href="/"><img src="{{url('img/assets/logo.png')}}" alt="logo compartilhe receitas" width="130"></a></div>
            <div class="nav" id="menuGrande">
                <form action="{{url('/busca')}}" class="pesquisa" method="get" id="busca" >
                    <input type="text" class="fa form-control" placeholder=" Pesquisar                  &#xf002;" name="busca">
                </form>
                <ul>
                @guest
                    <li><a href="/login" class="btnenviar"><i class="fa fa-user " aria-hidden="true" style="color: #444"></i> Entrar</a>
                    <a class="btnenviar" href="/receita/create">Enviar receita</a></li>
                @else

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle btnenviar" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fa fa-user" aria-hidden="true" style="color: #444"></i><span class="caret"></span> Logado
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Deseja {{ __('deslogar') }}<br>
                                {{  Auth::user()->name}}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        <a class="btnenviar" href="/receita/create">Enviar receita</a>
                    </li>

                @endguest
            </ul>
        </div>
    </nav>
    <div class="cat" id="cat">
        <ul>
            <div class="nav" id="menu_mobile">
                    <form action="{{url('/busca')}}" class="pesquisa" method="get" id="busca" >
                        <input type="text" class="fa form-control" placeholder=" Pesquisar                  &#xf002;" name="busca">
                        <input type="text" value="asc" name="tipo" hidden>
                        <input type="submit">
                    </form>
                    <ul>
                    @guest
                    <div>
                        <li><a href="/login" ><i class="fa fa-user" aria-hidden="true" style="color: #fff"></i> Entrar</a></li>
                        <li><a class="btnenviar" href="/receita/create">Enviar receita</a></li>
                    </div>
                    @else

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-user" aria-hidden="true" style="color: #fff"></i><span class="caret"></span> Logado
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Deseja {{ __('Deslogar') }}<br>
                                    {{  Auth::user()->name}}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                            <a class="btnenviar" href="/receita/create">Enviar receita</a>
                        </li>

                    @endguest
                    </ul>
                </div>
                @foreach ($categorias as $c)
                    <li><a href="/categorias/{{ $c->id}}">{{ $c->nome}}</a></li>
                @endforeach

            </ul>
        </div>
    </div>
    <div class="container">
        @yield('principal')
    </div>
    <footer>
        <div class="footer ">
            <div class="redes">
                <div><i class="fa fa-facebook" aria-hidden="true"></i></div>
                <div><i class="fa fa-youtube-play" aria-hidden="true"></i></div>
                <div><i class="fa fa-twitter" aria-hidden="true"></i></div>
                <div><i class="fa fa-instagram" aria-hidden="true"></i></div>
            </div>
            <div class="logofooter">
                <img src="{{url('img/assets/logo.png')}}" alt="logo compartilhe receitas" width="300" height="100">
            </div>
        </div>
        <p class="copyright">Copyright 2018 Criado por HudsonDev.com.br Todos os direitos reservados proibido a reprodução sem autorização</p>
    </footer>
    <script src="{{ asset('js/app.js')}}"></script>
    <script>
        function carregar(pagina){
            $("#cat").load(pagina);
        }
    </script>
</body>
</html>
