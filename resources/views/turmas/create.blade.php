@extends('base')

@section('title', 'Criar Turma')

@section('content')
    <div class="title m-b-md">
    Criar Turma
    </div>
    <form action="/turmas" method="post">
        @csrf
        <label for="id_nome">Nome:</label>
        <input type="text" name="nome" id="id_nome">
        <label for="id_sigla">Sigla:</label>
        <input type="text" name="sigla" id="id_sigla">
        <label for="id_sigla">Descrição:</label>
        <input type="text" name="descricao" id="id_descricao">
        <label for="id_turno">Turno:</label>
        <select name="turno" id="id_turno">
            <option value="vespertino">Vespertino</option>
            <option value="matutino">Matutino</option>
        </select>
        <label for="id_serie">Curso:</label>
        <select name="serie" id="id_serie">
            <option value="">-------</option>
            @foreach ($series as $serie)
            <option value="{{ $serie->id }}">{{ $serie->nome }}</option>
            @endforeach
        </select>
        <button type="submit">Criar</button>
    </form>
@endsection