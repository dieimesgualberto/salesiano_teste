@extends('layouts.app')

@section('title', 'Editar Curso')

@section('content')
    <div class="title m-b-md">
    Editar Curso
    </div>
    <form action="/cursos/{{$curso->id}}" method="post">
    @method('PUT')
        @csrf
        <label for="id_nome">Nome:</label>
        <input type="text" name="nome" id="id_nome" value="{{$curso->nome}}">
        <label for="id_sigla">Sigla:</label>
        <input type="text" name="sigla" id="id_sigla" value="{{$curso->sigla}}">
        <label for="id_escola">Escola:</label>
        <select name="escola" id="id_escola" value="{{$curso->escola_id}}">
            <option value="">-------</option>
            @foreach ($escolas as $escola)
            <option value="{{ $escola->id }}">{{ $escola->nome }}</option>
            @endforeach
        </select>
        <button type="submit">Editar</button>
    </form>
@endsection