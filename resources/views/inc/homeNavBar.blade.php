<nav class="navbar" id="home-nav">

    <div id="top-nav" class = "container">
        <div class="col-md-2">
            <a class="navbar-brand" href="{{ url('/home') }}">                    
                <img src="https://i.stack.imgur.com/R1KYK.png" width="30" height="30" alt="">
            </a>
        </div>

        <div class="col-md-8">
            <form class="form-inline" action="#">
                <input id="search" class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>

        <div class="col-md-2 text-right">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(session()->has('storeName'))
                        {{session()->get('storeName')}}
                    @else 
                        Store Name
                    @endif

                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><i class="far fa-user-circle"></i> Your Account</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="dropdown-item" type="submit"><i class="fas fa-sign-out-alt"></i> Log out</button>
                    </form>
                    
                    <hr>
                    <a class="dropdown-item" href="#">Shopify help centre</a>
                    <a class="dropdown-item" href="#">Community forums</a>
                    <a class="dropdown-item" href="#">Hire a Shopify expert</a>
                    <a class="dropdown-item" href="#">Keyboard shortcuts</a>
                </div>
            </li>
        </div>

    </div>

    <div class="container">
        <div class="sidenav">
            <a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-shopping-cart"></i> Orders
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Orders</a>
                    <a class="dropdown-item" href="#">Drafts</a>
                    <a class="dropdown-item" href="#">Abandonded checkouts</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fab fa-product-hunt"></i> Products
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">All products</a>
                    <a class="dropdown-item" href="#">Inventory</a>
                    <a class="dropdown-item" href="#">Purchase orders</a>
                    <a class="dropdown-item" href="#">Transfers</a>
                    <a class="dropdown-item" href="#">Collections</a>
                    <a class="dropdown-item" href="#">Gift cards</a>
                </div>
            </li>

            <a href="#"><i class="far fa-user"></i> Customers</a>

            <li>
                <a class="collapsible" href="#" id="navbarDropdown" role="button" data-toggle="collapse" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-chart-bar"></i> Analytics
                </a>
                <div class="collapsible-body" v-bind:class="{turnRed: showItem}" v-on:click="showNavItem" aria-labelledby="navbarDropdown">
                    <a class="side-item" href="#">Dashboards</a>
                    <a class="side-item" href="#">Reports</a>
                    <a class="side-item" href="#">Live View</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bullhorn"></i> Marketing
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Overview</a>
                    <a class="dropdown-item" href="#">Campaigns</a>
                    <a class="dropdown-item" href="#">Automations</a>
                </div>
            </li>

            <a href="#"><i class="fas fa-tags"></i> Discounts</a>
            <a href="#"><i class="far fa-smile"></i> Apps</a>

            <br><br>
            <a href="#"></i>SALES CHANNEL <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
            <a href="/your-store"><i class="fas fa-eye"></i> Your store</a>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i> Online Store
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Themes</a>
                    <a class="dropdown-item" href="#">Blog posts</a>
                    <a class="dropdown-item" href="#">Pages</a>
                    <a class="dropdown-item" href="#">Navigation</a>
                    <a class="dropdown-item" href="#">Domains</a>
                    <a class="dropdown-item" href="#">Preferences</a>

                </div>
            </li>


        </div>
    </div>


</nav>   