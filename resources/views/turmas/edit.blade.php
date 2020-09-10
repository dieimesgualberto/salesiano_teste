@extends('layouts.app')

@section('title', 'Editar Turma')

@section('content')
    <h2>Editar Turma</h2>
    <form action="/turmas/{{$turma->id}}" method="post">
    @method('PUT')
        @csrf
        <div class="form-group">
            <label for="id_nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="id_nome" value="{{$turma->nome}}">
        </div>  
        <div class="form-group">  
            <label for="id_sigla">Sigla:</label>
            <input class="form-control" type="text" name="sigla" id="id_sigla" value="{{$turma->sigla}}">
        </div>
        <div class="form-group">    
            <label for="id_sigla">Descrição:</label>
            <input class="form-control" type="text" name="descricao" id="id_descricao" value="{{$turma->descricao}}">
        </div>
        <div class="form-group">    
            <label for="id_turno">Turno:</label>
            <select class="form-control" name="turno" id="id_turno" value="{{$turma->turno}}">
                <option value="vespertino">Vespertino</option>
                <option value="matutino">Matutino</option>
            </select>
        </div> 
        <div class="form-group">    
            <label for="id_serie">Serie:</label>
            <select class="form-control" name="serie" id="id_serie" value="{{$turma->serie_id}}">
                <option value="">-------</option>
                @foreach ($series as $serie)
                <option value="{{ $serie->id }}">{{ $serie->nome }}</option>
                @endforeach
            </select>
        </div>    
            <button class="btn btn-primary" type="submit">Editar</button>
    </form>
@endsection