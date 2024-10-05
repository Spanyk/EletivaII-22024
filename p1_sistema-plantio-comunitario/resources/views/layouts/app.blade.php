<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

    </style>
</head>

<body>
    <header>
        <nav class=" p-4 navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand bolder" href="{{ url('/') }}">TwoPlants</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Terreno
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('terreno.create')}}">Novo Terreno</a></li>
                            <li><a class="dropdown-item" href="{{ route('terreno.index') }}">Listar Terreno</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">moradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Plantas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Em breve</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    @if(!request()->is('/terreno'))
    <div class="container ">
        <div class="row mt-4 mb-4">
            <div class="row ">
                <div class="col center">
                    <img class="border rounded mt-4" height="350" width="650" src="../pagina_construcao.jpg"alt="Página em construção">
                </div>
            </div>
        </div>
    </div>
    @endif

    <main class="container mt-4">

        @yield('content')


    </main>

    <footer class="bg-dark text-center mt-4">

        <div class="container p-4"></div>

        <div class="text-center text-white p-3 ">
            © 2024 Copyright:
            <a class="text-white" href=" {{ url('/') }}">TwoPlants - For Comunity</a>
        </div>

    </footer>
    <script src="https://kit.fontawesome.com/d12d816b50.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>