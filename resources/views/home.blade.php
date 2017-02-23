<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/rangeslider.css') }}">
        <style>
            .game {
                margin-top: 50px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 20px;
                max-width: 100%;
                display: block;
            }
        </style>

    </head>
    <body>

        <canvas class="emscripten game" id="canvas"
            height="600px" width="960px"
            oncontextmenu="event.preventDefault()"></canvas>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1>Califica el juego!</h1>
                    <form class="form form-horizontal" action="{{ route('store') }}" method="post">

                        {!! csrf_field() !!}

                        <div>
                            <div class="col-md-9 col-md-offset-3">
                                <p class="form-control-static">
                                    <span>Deficiente</span>
                                    <span class="pull-right">Excelente</span>
                                </p>
                            </div>
                        </div>

                        <!-- creativity -->
                        <div class="form-group{{ $errors->has('creativity') ? ' has-error' : '' }}">
                            <label for="creativity" class="control-label col-md-3">
                                Creatividad*
                            </label>
                            <div class="col-md-9">
                                <input type="range" name="creativity" value="{{ old('creativity') }}" min="0" max="10">
                                @foreach($errors->get('creativity', '<p class="help-block">:message</p>') as $error)
                                    {!! $error !!}
                                @endforeach
                            </div>
                       </div>

                        <!-- inmersion -->
                        <div class="form-group{{ $errors->has('inmersion') ? ' has-error' : '' }}">
                            <label for="inmersion" class="control-label col-md-3">
                                Inmersión*
                            </label>
                            <div class="col-md-9">
                                <input type="range" name="inmersion" value="{{ old('inmersion') }}" min="0" max="10">
                                @foreach($errors->get('inmersion', '<p class="help-block">:message</p>') as $error)
                                    {!! $error !!}
                                @endforeach
                            </div>
                       </div>

                        <!-- design -->
                        <div class="form-group{{ $errors->has('design') ? ' has-error' : '' }}">
                            <label for="design" class="control-label col-md-3">
                                Diseño Gráfico*
                            </label>
                            <div class="col-md-9">
                                <input type="range" name="design" value="{{ old('design') }}" min="0" max="10">
                                @foreach($errors->get('design', '<p class="help-block">:message</p>') as $error)
                                    {!! $error !!}
                                @endforeach
                            </div>
                       </div>

                        <!-- functionality -->
                        <div class="form-group{{ $errors->has('functionality') ? ' has-error' : '' }}">
                            <label for="functionality" class="control-label col-md-3">
                                Funcionalidad*
                            </label>
                            <div class="col-md-9">
                                <input type="range" name="functionality" value="{{ old('functionality') }}" min="0" max="10">
                                @foreach($errors->get('functionality', '<p class="help-block">:message</p>') as $error)
                                    {!! $error !!}
                                @endforeach
                            </div>
                       </div>

                        <!-- challenge -->
                        <div class="form-group{{ $errors->has('challenge') ? ' has-error' : '' }}">
                            <label for="challenge" class="control-label col-md-3">
                                Desafío*
                            </label>
                            <div class="col-md-9">
                                <input type="range" name="challenge" value="{{ old('challenge') }}" min="0" max="10">
                                @foreach($errors->get('challenge', '<p class="help-block">:message</p>') as $error)
                                    {!! $error !!}
                                @endforeach
                            </div>
                        </div>

                        <!-- name -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label col-md-3">
                                Nombre
                            </label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="name" value="{{ old('name') }}" min="0" max="10">
                                @foreach($errors->get('name', '<p class="help-block">:message</p>') as $error)
                                    {!! $error !!}
                                @endforeach
                            </div>
                        </div>

                        <!-- comment -->
                        <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                            <label for="comment" class="control-label col-md-3">
                                Comentario
                            </label>
                            <div class="col-md-9">
                                <textarea name="comment" class="form-control" rows="3">{{ old('comment') }}</textarea>
                                @foreach($errors->get('comment', '<p class="help-block">:message</p>') as $error)
                                    {!! $error !!}
                                @endforeach
                            </div>
                        </div>

                        <!-- submit -->
                       <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <button class="btn btn-primary" type="submit">
                                    Califica!
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.0/rangeslider.min.js"></script>
        <script>
            $(document).ready(function () {
                $('input[type="range"]').rangeslider({
                    polyfill: false,
                });
            });
        </script>
        <script type="text/javascript">
            var Module = {
                TOTAL_MEMORY: 268435456,
                errorhandler: null,
                compatibilitycheck: null,
                backgroundColor: "#222C36",
                splashStyle: "Light",
                dataUrl: "Release/PlataformasWebGL.data",
                codeUrl: "Release/PlataformasWebGL.js",
                asmUrl: "Release/PlataformasWebGL.asm.js",
                memUrl: "Release/PlataformasWebGL.mem",
            };
        </script>
        <script src="Release/UnityLoader.js"></script>
    </body>
</html>
