@extends('layouts.app')

@section('title', 'Alunos')

@section('content')
<h2>Alunos</h2>
<a href="/alunos/create"><button class="btn btn-primary">Criar</button></a>
<div>
    @csrf
    @foreach ($alunos as $aluno)
        <p>Nome: {{ $aluno->nome }}</p>
        <p>Matrícula: {{ $aluno->matricula }}</p>
        <p>Data de nascimento: {{ $aluno->data_nascimento }}</p>
        <p>Email: {{ $aluno->email }}</p>
        <p>Status: {{ $aluno->status }}</p>
        <p>Turma: {{ $aluno->turma->nome }}</p>
        <a href="/alunos/{{$aluno->id}}/edit">
            <button class="btn btn-warning">Editar</button>
        </a> | <button class="btn btn-danger js-del" data-path="{{url("/alunos/$aluno->id")}}">Deletar</button>
    @endforeach
</div>
@endsection