@extends('layouts.app')

@section('title', 'Criar Serie')

@section('content')
    <div class="title m-b-md">
    <h3>Criar Serie</h3>
    </div>
    <form action="/series" method="post">
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
            <label for="id_curso">Curso:</label>
            <select class="form-control" name="curso" id="id_curso">
                <option value="">-------</option>
                @foreach ($cursos as $curso)
                <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                @endforeach
            </select>
        </div>    
        <button class="btn btn-primary" type="submit">Criar</button>
    </form>
@endsection