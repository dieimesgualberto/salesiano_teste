@extends('layouts.app')

@section('title', 'Cursos')

@section('content')
<div class="title m-b-md">
    Cursos
</div>
<a href="/cursos/create"><button>Criar</button></a>
<div>
    @csrf
    @foreach ($cursos as $curso)
        <p>Nome: {{ $curso->nome }}</p>
        <p>Sigla: {{ $curso->sigla }}</p>
        <p>Escola: {{ $curso->escola->nome }}</p>
        <a href="/cursos/{{$curso->id}}/edit"><button class="">Editar</button></a> | <button data-path="{{url("/cursos/$curso->id")}}" class="js-del">Deletar</button>
    @endforeach
</div>
@endsection