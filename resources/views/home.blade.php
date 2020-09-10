@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @guest
            <div>
                <p>Sem Usuário Logado</p>
            </div>
            @else
            <div>
                <a href="/escolas">Escolas</a>
                <a href="/cursos">Cursos</a>
                <a href="/series">Series</a>
                <a href="/turmas">Turmas</a>
                <a href="/alunos">Alunos</a>
            </div>
            @endguest
        </div>
    </div>
@endsection
