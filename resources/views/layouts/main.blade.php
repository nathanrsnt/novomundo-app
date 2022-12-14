<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Icons -->
        <script src="https://kit.fontawesome.com/6aa92d4619.js" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Sono:wght@400;500&display=swap" rel="stylesheet">
        <!-- Styles Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- Styles da Pagina -->
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/teste.css">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="antialiased text-light">
        <div class="container-fluid">
            <div class="row min-vh-100 flex-column flex-md-row">
                @auth
                <aside class="col-12 col md-3 col-xl-2 p-0 flex-shrink-1" style="background-color: #252422">
                    <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-item-center py-2 stricky-top" id="sidebar">
                        <div class="text-center p-3">
                            <img src="/img/charplaceholder2.jpg" alt="profile picture" class="img-fluid rounded-circle my-4 p-1 d-none d-md-block shadow">
                            <a href="#" class="navbar-brand mx-0 font-weight-bold text-nowrap">{{ auth()->user()->name }}</a>
                        </div>
                        <div class="p-3 fs-5">
                            <button class="navbar-toggler border-0 order-1" data-toggle="collapse" data-target="#nav" aria-controls="nav"aria-expanded="false" arialabel="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <ul class="navbar-nav flex-column w-100 justify">
                                <li class="nav-item mt-3">
                                    <em class="fa-solid fa-skull d-inline p-1 text-white"></em>
                                    <a href="/monstros/dashboard" class="nav-link d-inline p-1 text-white" title="">Bestiario Pessoal</a>
                                </li>
                                <li class="nav-item mt-3">
                                    <em class="fa-solid fa-shield-halved d-inline p-1 text-white"></em>
                                    <a href="/arsenais/dashboard" class="nav-link d-inline p-1 text-white" title="">Arsenal</a>
                                </li>
                                <li class="nav-item mt-3">
                                    <em class="fa-solid fa-suitcase d-inline p-1 text-white"></em>
                                    <a href="/itens/dashboard" class="nav-link d-inline p-1 text-white" title="">Itens no Inventario</a>
                                </li>
                                <li class="nav-item mt-3">
                                    <em class="fa-solid fa-person-military-rifle d-inline p-1 text-white"></em>
                                    <a href="/personagem/dashboard" class="nav-link d-inline p-1 text-white" title="">Meu Personagem</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </aside>
                @endauth
                <main class="col px-0 flex-grow-1">
                    <nav class="navbar navbar-expand-lg " style="background-color: #ffb200">
                        <div class="container-fluid">
                                <a class="navbar-brand" href="/">
                                    <img src="/img/nwlogo.png" alt="NW Logo" class="navlogo">
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Monstros
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="/monstros/all">Ver Monstros</a>
                                            </div>
                                        </li>

                                        

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Arsenais
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="/arsenais/all">Ver Arsenais</a>
                                            </div>
                                        </li>  

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Itens
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="/itens/all">Ver Itens</a>
                                            </div>
                                        </li>
                                    </ul>
                                    
                                    <ul class="navbar-nav ms-auto">
                                        @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="/register">Cadastre-se</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/login">Entrar</a>
                                        </li>
                                        @endguest
                                        @auth
                                        <form action="{{ url('/logout') }}" method="POST">
                                            @csrf
                                            <li class="nav-item">
                                                <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                                            </li>
                                        </form>
                                        @endauth
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        @if(session('msg'))
                            <div class="alert alert-success">
                                {{ session('msg') }}
                            </div>
                        @endif
                        <div class="container py-3">
                            @yield('content')
                        </div>
                </main>
            </div>
        </div>
        <footer>
        </footer>
        <!-- Scripts Bootstrap-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <!-- Scripts Icons-->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
