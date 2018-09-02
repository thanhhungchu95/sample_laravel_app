<html>
    <head>
        <title> @yield('title') </title>
        <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/bootstrap-theme.min.css') !!}">
    </head>
    <body>
        @include('shared.navbar')

        @yield('content')
    </body>

    <script src="{!! asset('js/jquery.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
</html>