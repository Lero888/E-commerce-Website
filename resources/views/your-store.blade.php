<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('inc.universalHeader')

    
    <nav class="navbar navbar-expand-lg bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarTogglerDemo01">
          <div><a class="navbar-brand" href="#">LOGO</a></div>
          <div><ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Catalog</a>
            </li>
          </ul></div>
          {{-- <form class="form-inline my-2 my-lg-0 hidden">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> --}}

          <div><ul class="navbar-nav ml-auto mt-2 mt-lg-0 text-right">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-shopping-bag"></i></a>
            </li>
          </ul></div>
        </div>
      </nav>

      <hr>
</head>

<body>
    <div id="app" class="store">


        <img class="first-img" src= "{{URL('/images/text-overlay.jpeg')}}" alt="">

        <div class="container-fluid">

            <div id="one" class="row">
                <div class="col-md-6">
                    <img id="earth" src= "{{URL('/images/store-image-2.jpg')}}" alt=""  >
                </div>

                <div class="col-md-6 align-self-center">
                    <h3>Image with Text</h3>
                    <p>Pair large text with an image to give focus to your chosen product, collection, or blog post. Add details on availability, style, or even provide a review.</p>
                </div>
            </div>

            
            <div id="two" class="row">
                <div class="col-md-4">
                    <img id="earth" src= "{{URL('/images/store-image-2.jpg')}}" alt=""  >
                    <h3>Add a title or tagline</h3>
                    <p>Share blog posts, products, or promotions with your customers. Use this text to describe products, share details on availability and style, or as a space to display recent reviews or FAQs.</p>
                </div>

                <div class="col-md-4">
                    <img id="earth" src= "{{URL('/images/store-image-2.jpg')}}" alt=""  >
                    <h3>Add a title or tagline</h3>
                    <p>Share blog posts, products, or promotions with your customers. Use this text to describe products, share details on availability and style, or as a space to display recent reviews or FAQs.</p>
                </div>

                
                <div class="col-md-4">
                    <img id="earth" src= "{{URL('/images/store-image-2.jpg')}}" alt=""  >
                    <h3>Add a title or tagline</h3>
                    <p>Share blog posts, products, or promotions with your customers. Use this text to describe products, share details on availability and style, or as a space to display recent reviews or FAQs.</p>
                </div>
            </div>
        </div>
          
    </div>

</body>

</html>