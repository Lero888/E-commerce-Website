<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{$title}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">

        <!-- Tab Icon -->
        <link rel="icon" href="{{URL('/images/logo.svg')}}">

    </head>


    <body>

        <div id="app">

            @csrf
            <acc-setup-one v-if="one"></acc-setup-one>

            <acc-setup-two v-if="two"></acc-setup-two>


            {{-- <button v-on:click="openAccSetupOneForm">General</button> --}}

        </div>

        <!-- Scripts -->
        <script src="{{ asset('/js/app.js') }}"></script>
      

    </body>

</html>