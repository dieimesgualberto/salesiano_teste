@extends('base')

@section('title', 'Series')

@section('content')
<div class="title m-b-md">
    Series
</div>
<a href="/series/create"><button>Criar</button></a>
<div>
    @csrf
    @foreach ($series as $serie)
        <p>Nome: {{ $serie->nome }}</p>
        <p>Sigla: {{ $serie->sigla }}</p>
        <p>Descrição: {{ $serie->descricao }}</p>
        <p>Curso: {{ $serie->curso->nome }}</p>
        <a href="/series/{{$serie->id}}/edit"><button class="">Editar</button></a> | <button data-path="{{url("/series/$serie->id")}}" class="js-del">Deletar</button>
    @endforeach
</div>
@endsection