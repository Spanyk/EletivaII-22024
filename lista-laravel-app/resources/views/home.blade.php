<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Menu de Exercicios</title>
    <style>
        a {
            text-decoration: none;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 18px;
            color: #121212;

        }

        body {
            background-color: #202020;
        }
    </style>
</head>

<body>

    <main class="container mt-4 border border-info" style="max-width: 30rem; border-radius: 8px; background-color: #fff; ">
        <h4 class="display-6 font-weight-bold text-center mt-4">Menu de Exercicios</h4>
        <hr>
        <div class="row p-2 d-flex justify-content-center ">
            <div class="col-md-6">
                <ol class="list-group list-group-light text-center ">
                    <li class="list-group-item p-6" style="background-color: #96a0aa; ">
                        <i class="fa-solid fa-arrow-right"></i>
                        <a href="{{ url('/exercicio/exercicio1') }}">Exercicio 1</a>
                    </li>
                    <li class="list-group-item"><a href="{{ url('exercicio/exercicio2') }}">Exercicio 2</a></li>
                    <li class="list-group-item" style="background-color: #96a0aa;"><a href="{{ url('exercicio/exercicio3') }}">Exercicio 3</a></li>
                    <li class="list-group-item"><a href="{{ url('exercicio/exercicio4') }}">Exercicio 4</a></li>
                    <li class="list-group-item" style="background-color: #96a0aa;"><a href="{{ url('exercicio/exercicio5') }}">Exercicio 5</a></li>
                    <li class="list-group-item"><a href="{{ url('exercicio/exercicio6') }}">Exercicio 6</a></li>
                    <li class="list-group-item" style="background-color: #96a0aa;"><a href="{{ url('exercicio/exercicio7') }}">Exercicio 7</a></li>
                    <li class="list-group-item"><a href="{{ url('exercicio/exercicio8') }}">Exercicio 8</a></li>
                    <li class="list-group-item" style="background-color: #96a0aa;"><a href="{{ url('exercicio/exercicio9') }}">Exercicio 9</a></li>
                    <li class="list-group-item"><a href="{{ url('exercicio/exercicio10') }}">Exercicio 10</a></li>
                </ol>
            </div>
            <div class="col-md-6 mb-2">
                <ol class="list-group list-group-light center text-center">
                    <li class="list-group-item" style="background-color: #96a0aa;"><a href="{{ url('exercicio/exercicio11') }}">Exercicio 11</a></li>
                    <li class="list-group-item"><a href="{{ url('exercicio/exercicio12') }}">Exercicio 12</a></li>
                    <li class="list-group-item" style="background-color: #96a0aa;"><a href="{{ url('exercicio/exercicio13') }}">Exercicio 13</a></li>
                    <li class="list-group-item"><a href="{{ url('exercicio/exercicio14') }}">Exercicio 14</a></li>
                    <li class="list-group-item" style="background-color: #96a0aa;"><a href="{{ url('exercicio/exercicio15') }}">Exercicio 15</a></li>
                    <li class="list-group-item"><a href="{{ url('exercicio/exercicio16') }}">Exercicio 16</a></li>
                    <li class="list-group-item" style="background-color: #96a0aa;"><a href="{{ url('exercicio/exercicio17') }}">Exercicio 17</a></li>
                    <li class="list-group-item"><a href="{{ url('exercicio/exercicio18') }}">Exercicio 18</a></li>
                    <li class="list-group-item" style="background-color: #96a0aa;"><a href="{{ url('exercicio/exercicio19') }}">Exercicio 19</a></li>
                    <li class="list-group-item"><a href="{{ url('exercicio/exercicio20') }}">Exercicio 20</a></li>
                </ol>
            </div>
        </div>
    </main>


    <script src="https://kit.fontawesome.com/d12d816b50.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</body>

</html>