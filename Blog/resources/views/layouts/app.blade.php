<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <title>Blog</title>
</head>
<body>
    <header>
        <nav class="nav-link">
            <ul class="ul-link">
                <li class="link-left"> <a href="/">Blog</a>  </li>
                <li class="link-center">
                    <form action="{{route('search')}}" method="GET">
                        @csrf

                        <input type="search" name="search" placeholder="Pesquise Algum Assunto">
                        <button type="submit" class="btn-search"><img src="{{url('icons/search.svg')}}" alt="Procurar"></button>
                    </form>
                </li>
            @guest
                <li class="link-right"> <a href="/register">Registrar</a> </li>
                <li class="link-right"> <a href="/login">Login</a> </li>
            @endguest

            @auth
                <li class="link-right">
                    <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ucwords(Auth::user()->name)}}
                    </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            @if (auth()->user()->autorize == 'admin')
                    <li class="link-right"> 
                        <a href="{{route('create-record-index')}}">Criar Registros</a>
                    </li>
                    <li class="link-right"> 
                        <a href="{{route('create-post-index')}}">Criar Post</a>
                    </li>
                    <li class="link-right"> 
                        <a href="{{route('edit-records')}}">Editar Registros</a>
                    </li>
        
                @elseif(auth()->user()->autorize == 'mod')
                    <li class="link-right"> 
                        <a href="{{route('edit-records')}}">Editar Registros</a> 
                    </li>
                @endif
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Sair Da Conta</button>
                    </form>
                </ul>
                </li> 
                @endauth
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-box">
            <div class="footer-div">
                <h2>Sobre Nós</h2>
                <ul>
                    <li><a href="#">Empresa</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
            <div class="footer-div">
                <h2>Suporte</h2>
                <ul>
                    <li><a href="#">Chat Ao Vivo</a></li>
                    <li><a href="#">Falar Com Atentente</a></li>
                    <li><a href="#">Duvidas Frequentes</a></li>
                </ul>
            </div>
            <div class="footer-div social">
                <h2>Siga-Nos</h2>
                <ul>
                    <li><a href="#"><img src="{{url('icons/facebook.svg')}}" alt="Facebook"></a></li>
                    <li><a href="#"><img src="{{url('icons/whatsapp.svg')}}" alt="WhatsApp"></a></li>
                    <li><a href="#"><img src="{{url('icons/github.svg')}}" alt="Github"></a></li>
                    <li><a href="#"><img src="{{url('icons/linkedin.svg')}}" alt="Linkedin"></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-dev">
            <p>Desenvolvido Por Robson Luiz &copy;</p>
        </div>
    </footer>

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    @yield('scripts')
</body>
</html>
