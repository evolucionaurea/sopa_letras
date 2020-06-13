<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio Cor</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/estilos.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>


<body>
    <div class="jumbotron">
        <h2>Sopa de letras</h2>
        <p>Realizado por: Sebastian Sanchez</p>
    </div>

    <div class="container">
        @include('mensajes_validacion')
    </div>

    <div class="contenedor">
        <form action="{{ action('SopaController@buscar') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Elegir patrón</label>
                <select name="patron" class="form-control">
                    <option value="0">-- Seleccione --</option>
                    <option value="3x3">Opción 3 x 3</option>
                    <option value="1x10">Opción 1 x 10</option>
                    <option value="5x5">Opción 5 x 5</option>
                    <option value="7x2">Opción 7 x 2</option>
                </select>
            </div>
            <button id="buscar" class="btn btn-sm btn-info" type="submit">Buscar</button>
        </form>

        <div class="listado">
            <ul class="list-group">
                <li class="list-group-item active">Opción 3 x 3</li>
                <li class="list-group-item">OIE</li>
                <li class="list-group-item">IIX</li>
                <li class="list-group-item">EXE</li>
            </ul>

            <ul class="list-group">
                <li class="list-group-item active">Opción 1 x 10</li>
                <li class="list-group-item">EIOIEIOEIO</li>
            </ul>

            <ul class="list-group">
                <li class="list-group-item active">Opción 5 x 5</li>
                <li class="list-group-item">EAEAE</li>
                <li class="list-group-item">AIIIA</li>
                <li class="list-group-item">EIOIE</li>
                <li class="list-group-item">AIIIA</li>
                <li class="list-group-item">EAEAE</li>
            </ul>

            <ul class="list-group">
                <li class="list-group-item active">Opción 7 x 2</li>
                <li class="list-group-item">OX</li>
                <li class="list-group-item">IO</li>
                <li class="list-group-item">EX</li>
                <li class="list-group-item">II</li>
                <li class="list-group-item">OX</li>
                <li class="list-group-item">IE</li>
                <li class="list-group-item">EX</li>
            </ul>
        </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
