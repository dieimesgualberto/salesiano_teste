@extends('base')

@section('title', 'Escolas')

@section('content')
<div class="title m-b-md">
    Escolas
</div>
<a href="/escolas/create"><button>Criar</button></a>
<div>
    @csrf
    @foreach ($escolas as $escola)
        <p>Nome: {{ $escola->nome }}</p>
        <p>Sigla: {{ $escola->sigla }}</p>
        <p>Cidade: {{ $escola->cidade }}</p>
        <p>Estado: {{ $escola->estado }}</p>
        <a href="/escolas/{{$escola->id}}/edit"><button class="">Editar</button></a> | <button data-path="{{url("/escolas/$escola->id")}}" class="js-del">Deletar</button>
    @endforeach
</div>
@endsection