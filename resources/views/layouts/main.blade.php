<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('inc.universalHeader')
</head>

<body>
    <div id="app">
        @include('inc.mainNavBar')
       

        <main class="">
            @yield('content')
        </main>

        <pop-up-form v-if="showForm" post-route="{{ json_encode(route('register')) }}"></pop-up-form>

    </div>
   

    
</body>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    @include('inc.mainFooter')

</html>
