@extends('base')

@section('title', 'Editar Aluno')

@section('content')
    <div class="title m-b-md">
    Editar Aluno
    </div>
    <form action="/alunos/{{$aluno->id}}" method="post">
    @method('PUT')
        @csrf
        <label for="id_nome">Nome:</label>
        <input type="text" name="nome" id="id_nome" value="{{$aluno->nome}}">
        <label for="id_data_nascimento">Data de nascimento:</label>
        <input type="date" name="data_nascimento" id="id_data_nascimento" value="{{$aluno->data_nascimento}}">
        <label for="id_matricula">Matrícula:</label>
        <input type="text" name="matricula" id="id_matricula" value="{{$aluno->matricula}}">
        <label for="id_email">E-mail:</label>
        <input type="text" name="email" id="id_email" value="{{$aluno->email}}">
        <select name="status" id="id_status" value="{{$aluno->status}}">
            <option value="1">Ativo</option>
            <option value="0">Inativo</option>
        </select>
        <label for="id_turma">Turma:</label>
        <select name="turma" id="id_turma" value="{{$aluno->turma_id}}">
            <option value="">-------</option>
            @foreach ($turmas as $turma)
            <option value="{{ $turma->id }}">{{ $turma->nome }}</option>
            @endforeach
        </select>
        <button type="submit">Editar</button>
    </form>
@endsection