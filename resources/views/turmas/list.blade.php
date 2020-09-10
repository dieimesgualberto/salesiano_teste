@extends('layouts.app')

@section('title', 'Turmas')

@section('content')
<div class="title m-b-md">
    <h2>Turmas</h2>
</div>
<a href="/turmas/create"><button class="btn btn-primary">Criar</button></a>
<br>
<br>
<div>
    @csrf
    @foreach ($turmas as $turma)
        <p>Nome: {{ $turma->nome }}</p>
        <p>Sigla: {{ $turma->sigla }}</p>
        <p>Descrição: {{ $turma->descricao }}</p>
        <p>Turno: {{ $turma->turno }}</p>
        <p>Curso: {{ $turma->serie->nome }}</p>
        <a href="/turmas/{{$turma->id}}/edit"><button class="btn btn-warning">Editar</button></a> | <button class="btn btn-danger js-del" data-path="{{url("/turmas/$turma->id")}}" >Deletar</button>
    @endforeach
</div>
@endsection