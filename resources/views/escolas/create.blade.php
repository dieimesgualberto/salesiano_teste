@extends('layouts.app')

@section('title', 'Criar Escola')

@section('content')
    <div class="title m-b-md">
    Criar Escola
    </div>
    <form action="/escolas" method="post">
        @csrf
        <label for="">Nome:</label>
        <input type="text" name="nome">
        <label for="">Sigla:</label>
        <input type="text" name="sigla">
        <label for="">Cidade:</label>
        <input type="text" name="cidade">
        <label for="">Estado:</label>
        <input type="text" name="estado">
        <button type="submit">Criar</button>
    </form>
@endsection