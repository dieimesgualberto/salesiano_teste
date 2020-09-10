@extends('layouts.app')

@section('title', 'Series')

@section('content')
<div class="title m-b-md">
    <h3>Series</h3>
</div>
<a href="/series/create"><button class="btn btn-primary">Criar</button></a>
<br>
<br>
<div>
    @csrf
    @foreach ($series as $serie)
        <p>Nome: {{ $serie->nome }}</p>
        <p>Sigla: {{ $serie->sigla }}</p>
        <p>Descrição: {{ $serie->descricao }}</p>
        <p>Curso: {{ $serie->curso->nome }}</p>
        <a href="/series/{{$serie->id}}/edit"><button class="btn btn-warning">Editar</button></a> | <button class="btn btn-danger js-del" data-path="{{url("/series/$serie->id")}}" >Deletar</button>
        </a>
    @endforeach
</div>
@endsection