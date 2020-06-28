<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shopify - Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">

        <!-- Tab Icon  -->
        <link rel="icon" href="{{URL('/images/logo.svg')}}">

    </head>
    <body id="login-body">
        <div class="container">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        {{-- <a href="{{ route('login') }}">Login</a> --}}

                        @if (Route::has('register'))
                            {{-- <a href="{{ route('register') }}">Register</a> --}}
                        @endif
                    @endauth
                </div>
            @endif

            <main class="">
                @yield('content')
            </main>
        </div>
    </body>

    <footer id="login-footer-footer float-right">
        <div id="login-footer" class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-right">
                    <a id="footer-text" href="#">Help</a>
                    <a id="footer-text" href="#">Privacy</a>
                    <a id="footer-text" href="#">Term</a>
                </div>
            </div>
        </div>
    </footer>
</html>
