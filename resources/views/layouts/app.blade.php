<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    @include('inc.universalHeader')

</head>
<body>
    <div id="app">


        <main class="">
            @yield('content')
        </main>


    </div>
   

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</body>

</html>
