@extends('layouts.app')

@section('title', 'Editar Curso')

@section('content')
    <h2>Editar Curso</h2>
    <form action="/cursos/{{$curso->id}}" method="post">
    @method('PUT')
        @csrf
        <div class="form-group">
            <label for="id_nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="id_nome" value="{{$curso->nome}}">
        </div>    
        <div class="form-group">   
            <label for="id_sigla">Sigla:</label>
            <input class="form-control"  type="text" name="sigla" id="id_sigla" value="{{$curso->sigla}}">
        </div>    
        <div class="form-group">
            <label for="id_escola">Escola:</label>
            <select class="form-control" name="escola" id="id_escola" value="{{$curso->escola_id}}">
                <option value="">-------</option>
                @foreach ($escolas as $escola)
                <option value="{{ $escola->id }}">{{ $escola->nome }}</option>
                @endforeach
            </select>
        </div>    
        <button class="btn btn-primary" type="submit">Editar</button>
    </form>
@endsection