<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <!-- Styles Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- Styles da Pagina -->
        <link rel="stylesheet" href="/css/style.css">
        <link href="../../public/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="container-fluid">
            <div class="row min-vh-100 flex-column flex-md-row ">
                <aside class="col-12 col md-3 col-xl-2 p-0 bg-dark flex-shrink-1">
                    <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-item-center py-2 text-center stricky-top" id="sidebar">
                        <div class="text-center p-3">
                            <img src="img/charplaceholder2.png" alt="profile picture" class="img-fluid rounded-circle my-4 p-1 d-none d-md-block shadow">
                            <a href="#" class="navbar-brand mx-0 font-weight-bold text-nowrap">User Name</a>
                        </div>
                        <button class="navbar-toggler border-0 order-1" data-toggle="collapse" data-target="#nav" aria-controls="nav"aria-expanded="false" arialabel="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <ul class="navbar-nav flex-column w-100 justify">
                        <li class="nav-item">
                            <a href="#" class="nav-link" title="">Bestiario Pessoal</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" title="">Arsenal</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" title="">Itens no Inventario</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" title="">Editar Perfil</a>
                        </li>
                        </ul>
                        <ul class="nav justifty-content-center">
                            <li class="nav-item">
                                <a href="#" class=""></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class=""></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class=""></a>
                            </li>
                        </ul>
                    </nav>
                </aside>
                <main class="col px-0 flex-grow-1">
                <nav class="navbar navbar-expand-lg bg-light aria-labbelledby">
                    <div class="container-fluid">
                            <a class="navbar-brand" href="/">
                                <img src="/img/nwlogo.png" alt="NW Logo" class="navlogo">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="monstros">Monstros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="arsenal">Arsenal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="itens">Itens</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="container py-3">
                        @yield('content')
                    </div>
                </main>
            </div>
        </div>
        <footer>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
