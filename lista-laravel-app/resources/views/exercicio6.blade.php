<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Exercicio 6</title>
</head>

<body>
    <div class="container-sm">
        <h3 class="mt-4">Conversor de Temperatura para Fahrenheit</h3>
        <form class="row g-3 mt-4" action="/resultado-exercicio-6" method="POST">
            @CSRF
            @method('GET')
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="number" name="celsius" id="celsius" class="form-control">
                    <label for="celsius" class="form-label">Temperatura em celsius:</label>
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-success">Enviar</button>
                <a href="{{ url('/') }}" class="btn btn-secondary"><i class="fa-solid fa-house me-2"></i>Voltar</a>
            </div>
        </form>
    </div>



    <script src="https://kit.fontawesome.com/d12d816b50.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</body>

</html>