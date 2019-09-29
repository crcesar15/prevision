<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Nunchi</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @yield('navigation')
        @yield('sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Version 2.0</small>
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
        </div>
        <!-- /.content-wrapper -->
        @yield('footer')
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
