@extends('layouts.app')

@section('title', 'Editar Escola')

@section('content')
    <div class="title m-b-md">
    <h2>Editar Escola</h3>
    </div>
    <form action="/escolas/{{$escola->id}}" method="post">
    @method('PUT')
        @csrf
        <div class="form-group">
                <label for="">Nome:</label>
                <input type="text" name="nome" value="{{$escola->nome}}">
        </div>
        <div class="form-group">
                <label for="">Sigla:</label>
                <input class="form-control" type="text" name="sigla" value="{{$escola->sigla}}">
        </div>
        <div class="form-group">
                <label for="">Cidade:</label>
                <input class="form-control" type="text" name="cidade" value="{{$escola->cidade}}">
        </div>
        <div class="form-group">
                <label for="">Estado:</label>
                <input class="form-control" type="text" name="estado" value="{{$escola->estado}}">
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
@endsection