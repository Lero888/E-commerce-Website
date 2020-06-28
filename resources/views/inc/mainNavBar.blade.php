<nav class="navbar navbar-expand-md navbar-custom shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">                    
            <img src="https://i.stack.imgur.com/R1KYK.png" width="30" height="30" alt="">
        </a>
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button> --}}

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Start <span class="sr-only">(current)</span>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Start your business</a>
                        <hr>
                        <a class="dropdown-item" href="#">Branding</a>
                        <a class="dropdown-item" href="#">Online Presence</a>
                        <a class="dropdown-item" href="#">Store set up</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sell
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Sell everywhere</a>
                        <hr>
                        <a class="dropdown-item" href="#">Online store</a>
                        <a class="dropdown-item" href="#">Point of Sale</a>
                        <a class="dropdown-item" href="#">Buy Button</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Market
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Market your business</a>
                        <hr>
                        <a class="dropdown-item" href="#">Email Marketing</a>
                        <a class="dropdown-item" href="#">Shopify Ping</a>
                        <a class="dropdown-item" href="#">Google Shopping</a>
                        <a class="dropdown-item" href="#">Facebook Ads</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Manage
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Manage Everything</a>
                        <hr>
                        <a class="dropdown-item" href="#">Payments</a>
                        <a class="dropdown-item" href="#">Shipping</a>
                        <a class="dropdown-item" href="#">Capital</a>
                    </div>
                </li>`
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li><a class="nav-item nav-link" href="#">Pricing</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Learn
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Help Center</a>
                        <a class="dropdown-item" href="#">Blog</a>
                        <a class="dropdown-item" href="#">Compass</a>
                        <a class="dropdown-item" href="#">Guide</a>
                        <a class="dropdown-item" href="#">Forums</a>
                    </div>
                </li>
                <li><a class="nav-item nav-link" href="/login">Log in</a></li>
                <button id="start-free" class="btn btn-outline-success my-2 my-sm-0" v-on:click="openForm">&nbsp;Start free trial</button>
            </ul>
        </div>
    </div>
</nav>