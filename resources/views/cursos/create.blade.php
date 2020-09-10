@extends('base')

@section('title', 'Criar Curso')

@section('content')
    <div class="title m-b-md">
    Criar Curso
    </div>
    <form action="/cursos" method="post">
        @csrf
        <label for="id_nome">Nome:</label>
        <input type="text" name="nome" id="id_nome">
        <label for="id_sigla">Sigla:</label>
        <input type="text" name="sigla" id="id_sigla">
        <label for="id_escola">Escola:</label>
        <select name="escola" id="id_escola">
            <option value="">-------</option>
            @foreach ($escolas as $escola)
            <option value="{{ $escola->id }}">{{ $escola->nome }}</option>
            @endforeach
        </select>
        <button type="submit">Criar</button>
    </form>
@endsection