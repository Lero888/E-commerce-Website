<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    @include('inc.universalHeader')

    @include('inc.homeNavbar')
    
</head>



<body>
    <div id="app">

        <main class="">
            @yield('content')
        </main>

    </div>
   

    
</body>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</html>
