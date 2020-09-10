@extends('layouts.app')

@section('title', 'Criar Aluno')

@section('content')
    <div class="title m-b-md">
    Criar Aluno
    </div>
    <form action="/alunos" method="post">
        @csrf
        <label for="id_nome">Nome:</label>
        <input type="text" name="nome" id="id_nome">
        <label for="id_data_nascimento">Data de nascimento:</label>
        <input type="date" name="data_nascimento" id="id_data_nascimento">
        <label for="id_matricula">Matrícula:</label>
        <input type="text" name="matricula" id="id_matricula">
        <label for="id_email">E-mail:</label>
        <input type="text" name="email" id="id_email">
        <select name="status" id="id_status">
            <option value="1">Ativo</option>
            <option value="0">Inativo</option>
        </select>
        <label for="id_turma">Turma:</label>
        <select name="turma" id="id_turma">
            <option value="">-------</option>
            @foreach ($turmas as $turma)
            <option value="{{ $turma->id }}">{{ $turma->nome }}</option>
            @endforeach
        </select>
        <button type="submit">Criar</button>
    </form>
@endsection