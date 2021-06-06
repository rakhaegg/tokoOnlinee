<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
    <div style="text-align: center"><h1>TOKO ONLINE</h1></div>
        <div class="container">
            <div class="row">
            @if (Route::has('login'))
                    @auth
                        <div class="col">
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline"><h1>Home</h1></a>
                        </div>
                    @else
                        <div class="col">
                        <a href="{{ route('admin.home') }}" class="ml-4 text-sm text-gray-700 underline"><h1 style="text-align: center">Log in</h1></a>
                        </div>
                        @if (Route::has('register'))
                            <div class="col">
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline"><h1 style="text-align: center">Register</h1></a>
                            </div>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
