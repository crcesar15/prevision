<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Nunchi</title>

    <!-- Fonts -->
    <link rel="icon" type="image/png" href="{{asset('images/icon.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body class="hold-transition login-page" style="background-image:url({{asset('images/bg.jpg')}}); background-repeat:no-repeat; background-size:cover;">
    <div class="jumbotron text-center" style="background-color: rgba(45, 70, 105, 0.95); color:white; ">
        <h1><i class="fa fa-child"> </i> NUNCHI</h1>
        <h3>Sistema de Detección de Niños en Riesgo</h3>
    </div>
    <div class="login-box" style="margin-top:20px; margin-bottom:20px;">
        <div class="login-box-body" style="border-radius: 15px;">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group has-feedback">
                    <input name="email" required type="email" class="form-control" placeholder="Email" autocomplete="off">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input name="password" required type="password" class="form-control" placeholder="Password" autocomplete="off">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-in"> </i> Sign In</button>
                    </div>
                </div>
            </form>
            <br>
            @if (session()->has('message'))
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h6><i class="icon fa fa-warning"></i> {{session()->get('message')}}</h6>
                </div>
            @endif
            <div class="text-center">
                <a href="register.html" class="text-center">Did you forget your password?</a>
                <br>
                <img src="{{asset('images/logo-emi.png')}}" alt="logo-emi" height="120">
            </div>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    <div class="row" style="margin:40px;">
        <div class="text-center col-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3" style="border-radius: 15px; background-color: rgba(255,255,255,0.80)">
            <b><i>NUNCHI: A veces "noonchi", es un concepto coreano que significa el arte sutil y la capacidad de escuchar y evaluar los estados de ánimo de los demás. En la cultura occidental, nunchi podría describirse como el concepto de inteligencia emocional.</i></b> 
        </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });

    </script>
</body>

</html>
