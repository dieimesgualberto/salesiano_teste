<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolas</title>
</head>
<body>
    <h1>Escolas</h1>
    @foreach ($escolas as $escola)
        <p>Nome: {{ $escola->nome }}</p>
        <p>Sigla: {{ $escola->sigla }}</p>
        <p>Cidade: {{ $escola->cidade }}</p>
        <p>Estado: {{ $escola->estado }}</p>
    @endforeach
</body>
</html>