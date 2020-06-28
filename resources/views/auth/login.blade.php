@extends('layouts.loginApp')

@section('content')
<div id="login-container" class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <a href="/home"><img id="logo" src="https://i.stack.imgur.com/R1KYK.png" alt="shopify logo"></a>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col-md-12 float-left"><h2><strong>Log in</strong></h2></div>
    </div>

    <div class="row">
        <div id="con" class="col-md-12"><p>Continue to your store</p></div>
    </div>

    <br>

    <div  class="row special">
        <div class="col-md-6">Store address</div>
        <div class="col-md-6 text-right">
            @if (Route::has('password.request'))
                <a class="btn btn-link" id="forgot"  href="{{ route('password.request') }}">
                    Forgot store?
                </a>
            @endif
        </div>
    </div>

    <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">

                <div class="row">
                    <div class="col-md-12">
                        <input type="text"
                            class="form-control @error('storeName') is-invalid @enderror" name="storeName" id="store_name" aria-describedby="helpId" placeholder="myshop.myshopify.com"><br><br>
                        
                        @error('storeName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <input type="text"
                            class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="helpId" placeholder="Email Address"><br><br>
                        
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <input type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" id="password" aria-describedby="helpId" placeholder="Password"><br><br>
                        
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                    
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button id="btn-next" type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>

            </div>
                                   
    </form>

    <div class="row">
        <div class="col-md-12"><p>New to Shopify?  <a id="start" href="/register">Get started</a></p></div>
    </div>

</div>
@endsection
