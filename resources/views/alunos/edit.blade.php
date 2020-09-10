@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')
    <h2>Editar Aluno</h2>
    <form action="/alunos/{{$aluno->id}}" method="post">
    @method('PUT')
        @csrf
        <div class="form-group">
            <label for="id_nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="id_nome" value="{{$aluno->nome}}">
        </div>
        <div class="form-group">
            <label for="id_data_nascimento">Data de nascimento:</label>
            <input class="form-control" type="date" name="data_nascimento" id="id_data_nascimento" value="{{$aluno->data_nascimento}}">
        </div>
        <div class="form-group">
            <label for="id_matricula">Matrícula:</label>
            <input class="form-control" type="text" name="matricula" id="id_matricula" value="{{$aluno->matricula}}">
        </div>
        <div class="form-group">
            <label for="id_email">E-mail:</label>
            <input class="form-control" type="text" name="email" id="id_email" value="{{$aluno->email}}">
        </div>
        <div class="form-group">
            <label for="id_status">Status</label>
            <select class="form-control" name="status" id="id_status" value="{{$aluno->status}}">
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="id_turma">Turma:</label>
            <select class="form-control" name="turma" id="id_turma" value="{{$aluno->turma_id}}">
                <option value="">-------</option>
                @foreach ($turmas as $turma)
                <option value="{{ $turma->id }}">{{ $turma->nome }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Editar</button>
    </form>
@endsection