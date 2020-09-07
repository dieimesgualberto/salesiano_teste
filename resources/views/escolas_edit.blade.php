<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Escola</title>
</head>
<body>
    <H1>Editar Escola</H1>
    <form action="/escolas/{{$escola->id}}" method="post">
    @method('PUT')
        @csrf
        <label for="">Nome:</label>
        <input type="text" name="nome" value="{{$escola->nome}}">
        <label for="">Sigla:</label>
        <input type="text" name="sigla" value="{{$escola->sigla}}">
        <label for="">Cidade:</label>
        <input type="text" name="cidade" value="{{$escola->cidade}}">
        <label for="">Estado:</label>
        <input type="text" name="estado" value="{{$escola->estado}}">
        <button type="submit">Salvar</button>
    </form>
    
</body>
</html>