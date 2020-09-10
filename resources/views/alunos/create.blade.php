@extends('layouts.app')

@section('title', 'Criar Aluno')

@section('content')
    <h2>Criar Aluno</h2>
    <form action="/alunos" method="post">
        @csrf
        <div class="form-group">
            <label for="id_nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="id_nome">
        </div>
        <div class="form-group">
            <label for="id_data_nascimento">Data de nascimento:</label>
            <input class="form-control" type="date" name="data_nascimento" id="id_data_nascimento">
        </div>
        <div class="form-group">
            <label for="id_matricula">Matrícula:</label>
            <input class="form-control" type="text" name="matricula" id="id_matricula">
        </div>
        <div class="form-group">
            <label for="id_email">E-mail:</label>
            <input class="form-control" type="text" name="email" id="id_email">
        </div>
        <div class="form-group">
            <label for="id_status">Status</label>
            <select class="form-control"  name="status" id="id_status">
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="id_turma">Turma:</label>
            <select class="form-control"  name="turma" id="id_turma">
                <option value="">-------</option>
                @foreach ($turmas as $turma)
                <option value="{{ $turma->id }}">{{ $turma->nome }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Criar</button>
    </form>
@endsection