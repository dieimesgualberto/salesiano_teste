@extends('layouts.app')

@section('title', 'Criar Curso')

@section('content')
    <div class="title m-b-md">
    <h2>Criar Curso</h2>
    </div>
    <form action="/cursos" method="post">
        @csrf
        <div class="form-group">
            <label for="id_nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="id_nome">
        </div>
        <div class="form-group">
            <label for="id_sigla">Sigla:</label>
            <input class="form-control" type="text" name="sigla" id="id_sigla">
        </div>
        <div class="form-group">
            <label for="id_escola">Escola:</label>
            <select class="form-control" name="escola" id="id_escola">
            <option value="">-------</option>
            @foreach ($escolas as $escola)
            <option value="{{ $escola->id }}">{{ $escola->nome }}</option>
            @endforeach
        </select>
        </div>
        <button class="btn btn-primary" type="submit">Criar</button>
    </form>
@endsection