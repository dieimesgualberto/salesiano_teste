@extends('base')

@section('title', 'Editar Serie')

@section('content')
    <div class="title m-b-md">
    Editar Serie
    </div>
    <form action="/series/{{$serie->id}}" method="post">
    @method('PUT')
        @csrf
        <label for="id_nome">Nome:</label>
        <input type="text" name="nome" id="id_nome" value="{{$serie->nome}}">
        <label for="id_sigla">Sigla:</label>
        <input type="text" name="sigla" id="id_sigla" value="{{$serie->sigla}}">
        <label for="id_sigla">Descrição:</label>
        <input type="text" name="descricao" id="id_descricao" value="{{$serie->descricao}}">
        <label for="id_curso">Curso:</label>
        <select name="curso" id="id_curso" value="{{$serie->curso_id}}">
            <option value="">-------</option>
            @foreach ($cursos as $curso)
            <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
            @endforeach
        </select>
        <button type="submit">Editar</button>
    </form>
@endsection