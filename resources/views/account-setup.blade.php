<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('inc.universalHeader')

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