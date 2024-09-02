<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Menu de Exercicios</title>
</head>
<body>
    
<div class="row">
    <div class="col p-2">
        <section class="mx-auto my-5" style="max-width: 23rem;">
            <div class="card testimonial-card mt-2 mb-3">
                <div class="card-body text-center">
                    <h4 class="card-title font-weight-bold">Menu de Exercicios</h4>
                    <hr>
                    <p>
                    <ol class="list-group list-group-light ">
                        <li class="list-group-item"><a href="{{ url('/form') }}">Exercicio 1</a></li>
                        <li class="list-group-item"><a href="{{ url('exercicio/exercicio2') }}">Exercicio 2</a></li>
                        <li class="list-group-item"><a href="{{ url('exercicio/exercicio3') }}">Exercicio 3</a></li>
                        <li class="list-group-item"><a href="{{ url('exercicio/exercicio4') }}">Exercicio 4</a></li>
                    </ol>
                    </p>
                </div>
            </div>
        </section>
    </div>
</div>

<script src="https://kit.fontawesome.com/d12d816b50.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</body>
</html>