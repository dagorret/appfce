<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Aplicación Facultad de Ciencias Económicas - Universidad Nacional de Río Cuarto</title>

    <!-- APPFCE Landing CSS -->
    <link href={{ mix('css/landing.css') }} rel="stylesheet">
</head>

<body>

<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation" class="active"><a href="#">Inicio</a></li>
            </ul>
        </nav>
        <h3 class="text-muted">AppFCE</h3>
    </div>

    <div class="jumbotron">
        <h3>Facultad de Ciencias Económicas</h3>
        <p class="lead">Este es un sitio de la FCE-UNRC. Su uso es para la comunidad de la Facultad</p>
        <div class="row">
            <div class="col-md-6">
                <p><a class="btn btn-lg btn-success" href="{{ route('login') }}" role="button">Iniciar Sesión</a></p>
            </div>
            <div class="col-md-6">
                <p><a class="btn btn-lg btn-success" href="#" role="button">Registros</a></p>
            </div>
        </div>


    </div>

    <div class="row marketing">
        <div class="col-lg-12">
            <h4>Adverterncia</h4>
            <p>Si usted se encuentra aquí por error por favor abandone el sitio inmediatamente.
                Este sitio posee registro de actividad</p>
            <div>
            </div>

            <footer class="footer">
                <p>&copy; 2015-2017 Facultad de Ciencias Económicas - Universidad Nacional de Río Cuarto
                    - Licencia MIT.</p>
            </footer>

        </div> <!-- /container -->

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug A -->
        <script src={{ mix('js/landing.js') }}></script>
</body>
</html>