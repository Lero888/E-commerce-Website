<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>"Sign up for Shopify - Free 14-days trial"</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">

        <!-- Tab Icon  -->
        <link rel="icon" href="{{URL('/images/logo.svg')}}">

        <!-- Navigation bar -->
         <nav class="navbar">
            <a href="/home"><img src="https://i.stack.imgur.com/R1KYK.png" width="30" height="30" alt=""></a>
            <a href="/login"><p style="color: #ffffff">Already have a Shopify Account?</p></a>
        </nav>

    </head>
    <body id="free-body">
        <div class="container">

            <div class="row">
                <div class="col-md-8">

                    <form method="POST" action="{{ route('register') }}">
                    
                        <h1>Start your 14-day trial today</h1>
                        <p>Try Shopify for free, and explore all the tools and services you need to start, run, and grow your business.</p>
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelpId" placeholder="Email Address" />

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

            
                        <div class="form-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" />

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                        </div>

            
                        <div class="form-group">
                            <input type="text"
                            class="form-control @error('store_name') is-invalid @enderror" name="store_name" id="store_name" aria-describedby="helpId" placeholder="Your store name" />
                            
                            @error('store_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
            
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">
                                    Create your store
                            </button>
                        </div>
                        
                    </form>
        
                </div>
        
                <div id="img" class="col-md-4">
        
                    <img id="woman" class="img-resposive" src="https://artfiles.alphacoders.com/101/thumb-101776.jpg" alt="">
                
                </div>
        
            </div>
    </body>
</html>
