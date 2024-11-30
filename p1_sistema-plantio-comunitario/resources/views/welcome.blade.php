
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Cor de fundo suave */
        }

        .picture {
            width: 400px;
            height: auto;
            }

        .m-left {
            margin-left: 5rem
        }

        .center {
            text-align: center;
            padding: 4px;
            letter-spacing:8px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }
            
    </style>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6">
        <div class="center mb-4">
            <h2>Seja bem vindo ao...</h2>
        </div>
        <div class="card shadow-lg">
            <div class="card-body">
                <img src="{{ asset('imagens/logo_projeto.png')}}" class="picture m-left">
                <h5 class="p-2 text-center mb-4">Sistema de Controle de Plantio Comunitário</h5>
                @auth
                    <a href="/dashboard" class="btn btn-primary">
                        Acessar área restrita
                    </a>
                @else
                <div class="d-grid gap-2">
                    <a href="/login" class="btn btn-outline-primary">
                        Acessar o sistema
                    </a>
                     <a href="/register" class="btn btn-outline-primary">
                        Crie sua conta
                    </a>
                </div>
                    
                   
                @endauth
            </div>
            
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
