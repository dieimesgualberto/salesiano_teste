@extends('layouts.app')

@section('title', 'Editar Escola')

@section('content')
    <div class="title m-b-md">
    Editar Escola
    </div>
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
@endsection