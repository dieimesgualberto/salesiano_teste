@extends('layouts.app')

@section('title', 'Escolas')

@section('content')
<div class="title m-b-md">
    <h3>Escolas</h3>
</div>
<a href="/escolas/create"><button class="btn btn-primary">Criar</button></a>
<br>
<br>
<div>
    @csrf
    @foreach ($escolas as $escola)
        <p>Nome: {{ $escola->nome }}</p>
        <p>Sigla: {{ $escola->sigla }}</p>
        <p>Cidade: {{ $escola->cidade }}</p>
        <p>Estado: {{ $escola->estado }}</p>
        <a href="/escolas/{{$escola->id}}/edit"><button class="btn btn-warning">Editar</button></a> | <button class="btn btn-danger js-del" data-path="{{url("/escolas/$escola->id")}}">Deletar</button>
    @endforeach
</div>
@endsection