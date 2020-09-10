@extends('base')

@section('title', 'Criar Serie')

@section('content')
    <div class="title m-b-md">
    Criar Serie
    </div>
    <form action="/series" method="post">
        @csrf
        <label for="id_nome">Nome:</label>
        <input type="text" name="nome" id="id_nome">
        <label for="id_sigla">Sigla:</label>
        <input type="text" name="sigla" id="id_sigla">
        <label for="id_sigla">Descrição:</label>
        <input type="text" name="descricao" id="id_descricao">
        <label for="id_curso">Curso:</label>
        <select name="curso" id="id_curso">
            <option value="">-------</option>
            @foreach ($cursos as $curso)
            <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
            @endforeach
        </select>
        <button type="submit">Criar</button>
    </form>
@endsection