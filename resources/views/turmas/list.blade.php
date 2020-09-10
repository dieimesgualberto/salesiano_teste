@extends('layouts.app')

@section('title', 'Turmas')

@section('content')
<div class="title m-b-md">
    Turmas
</div>
<a href="/turmas/create"><button>Criar</button></a>
<div>
    @csrf
    @foreach ($turmas as $turma)
        <p>Nome: {{ $turma->nome }}</p>
        <p>Sigla: {{ $turma->sigla }}</p>
        <p>Descrição: {{ $turma->descricao }}</p>
        <p>Turno: {{ $turma->turno }}</p>
        <p>Curso: {{ $turma->serie->nome }}</p>
        <a href="/turmas/{{$turma->id}}/edit"><button class="">Editar</button></a> | <button data-path="{{url("/turmas/$turma->id")}}" class="js-del">Deletar</button>
    @endforeach
</div>
@endsection