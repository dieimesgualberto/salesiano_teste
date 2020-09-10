@extends('layouts.app')

@section('title', 'Criar Turma')

@section('content')
    <div class="title m-b-md">
    <h3>Criar Turma</h3>
    </div>
    <form action="/turmas" method="post">
        @csrf
        <div class="form-group">
            <label for="id_nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="id_nome">
        </div>
        <div class="form-group">    
            <label for="id_sigla">Sigla:</label>
            <input class="form-control" type="text" name="sigla" id="id_sigla">
        </div>
        <div class="form-group">    
            <label for="id_sigla">Descrição:</label>
            <input class="form-control" type="text" name="descricao" id="id_descricao">
        </div>
        <div class="form-group">    
            <label for="id_turno">Turno:</label>
            <select class="form-control" name="turno" id="id_turno">
                <option value="vespertino">Vespertino</option>
                <option value="matutino">Matutino</option>
            </select>
        </div> 
        <div class="form-group">   
            <label for="id_serie">Serie:</label>
            <select class="form-control" name="serie" id="id_serie">
                <option value="">-------</option>
                @foreach ($series as $serie)
                <option value="{{ $serie->id }}">{{ $serie->nome }}</option>
                @endforeach
            </select>
        </div>    
        <button class="btn btn-primary" type="submit">Criar</button>
    </form>
@endsection