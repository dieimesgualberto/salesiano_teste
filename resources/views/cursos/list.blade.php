@extends('layouts.app')

@section('title', 'Cursos')

@section('content')
<div class="title m-b-md">
    <h2>Cursos</h2>
</div>
<a href="/cursos/create"> <button class="btn btn-primary">Criar</button></a>
<div>
    @csrf
    @foreach ($cursos as $curso)
        <p>Nome: {{ $curso->nome }}</p>
        <p>Sigla: {{ $curso->sigla }}</p>
        <p>Escola: {{ $curso->escola->nome }}</p>
        <a href="/cursos/{{$curso->id}}/edit"><button class="btn btn-warning">Editar</button></a> | <button class="btn btn-danger js-del" data-path="{{url("/cursos/$curso->id")}}" >Deletar</button>
        </a>
    @endforeach
</div>
@endsection