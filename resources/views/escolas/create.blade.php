@extends('layouts.app')

@section('title', 'Criar Escola')

@section('content')
    <div class="title m-b-md">
    <h2>Criar Escola</h3>
    </div>
    <form action="/escolas" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nome:</label>
            <input class="form-control" type="text" name="nome">
        </div>
        <div class="form-group">    
            <label for="">Sigla:</label>
            <input class="form-control" type="text" name="sigla">
        </div>
        <div class="form-group">    
            <label for="">Cidade:</label>
            <input class="form-control" type="text" name="cidade">
        </div>
        <div class="form-group">
            <label for="">Estado:</label>
            <input tclass="form-control" ype="text" name="estado">
        </div>    
        <button class="btn btn-primary" type="submit">Criar</button>
    </form>
@endsection