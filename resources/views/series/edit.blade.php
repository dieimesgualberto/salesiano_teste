@extends('layouts.app')

@section('title', 'Editar Serie')

@section('content')
    <div class="title m-b-md">
    <h2>Editar Serie</h2>
    </div>
    <form action="/series/{{$serie->id}}" method="post">
    @method('PUT')
        @csrf
        <div class="form-group">
            <label for="id_nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="id_nome" value="{{$serie->nome}}">
        </div> 
        <div class="form-group">   
            <label for="id_sigla">Sigla:</label>
            <input class="form-control" type="text" name="sigla" id="id_sigla" value="{{$serie->sigla}}">
        </div>   
        <div class="form-group"> 
            <label for="id_sigla">Descrição:</label>
            <input class="form-control" type="text" name="descricao" id="id_descricao" value="{{$serie->descricao}}">
        </div>
        <div class="form-group">    
            <label for="id_curso">Curso:</label>
            <select class="form-control" name="curso" id="id_curso" value="{{$serie->curso_id}}">
                <option value="">-------</option>
                @foreach ($cursos as $curso)
                <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                @endforeach
            </select>
        </div>    
        <button class="btn btn-primary" type="submit">Editar</button>
    </form>
@endsection