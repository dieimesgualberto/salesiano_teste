<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Escolas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
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
            </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="{{url("js/javascript.js")}}"></script>
    </body>
</html>