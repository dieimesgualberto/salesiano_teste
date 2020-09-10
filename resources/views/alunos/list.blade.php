@extends('base')

@section('title', 'Alunos')

@section('content')
<div class="title m-b-md">
    Alunos
</div>
<a href="/alunos/create"><button>Criar</button></a>
<div>
    @csrf
    @foreach ($alunos as $aluno)
        <p>Nome: {{ $aluno->nome }}</p>
        <p>Matrícula: {{ $aluno->matricula }}</p>
        <p>Data de nascimento: {{ $aluno->data_nascimento }}</p>
        <p>Email: {{ $aluno->email }}</p>
        <p>Status: {{ $aluno->status }}</p>
        <p>Turma: {{ $aluno->turma->nome }}</p>
        <a href="/alunos/{{$aluno->id}}/edit"><button class="">Editar</button></a> | <button data-path="{{url("/alunos/$aluno->id")}}" class="js-del">Deletar</button>
    @endforeach
</div>
@endsection