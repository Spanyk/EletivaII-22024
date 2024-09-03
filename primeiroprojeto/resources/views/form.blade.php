<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="/processarForm" method="POST">
        @CSRF
        <input name="valor" placeholder="Valor" type="text"/>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>