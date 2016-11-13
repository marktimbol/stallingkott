<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle', 'Home') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    <link href="{{ elixir('css/carousel.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.App = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="@yield('bodyClass')">

    @include('layouts._header')

    @yield('subpage_header')
    
    @yield('content')

    @include('layouts._footer')

    <!-- Scripts -->
    <script src="/js/modernizr.js"></script>
    <script src="{{ elixir('js/app.js') }}"></script>
    <script src="{{ elixir('js/carousel.js') }}"></script>
    
    @include('flash')
</body>
</html>
