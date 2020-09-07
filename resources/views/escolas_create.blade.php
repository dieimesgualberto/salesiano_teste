<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Escola</title>
</head>
<body>
    <H1>Criar Escola</H1>
    <form action="/escolas" method="post">
        @csrf
        <label for="">Nome:</label>
        <input type="text" name="nome">
        <label for="">Sigla:</label>
        <input type="text" name="sigla">
        <label for="">Cidade:</label>
        <input type="text" name="cidade">
        <label for="">Estado:</label>
        <input type="text" name="estado">
        <button type="submit">Criar</button>
    </form>
</body>
</html>