<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- google font starts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- google font ends  -->
    <link rel="stylesheet" href="./Assets/CSS/main.css">
  </head>
  <body>
    <!-- nav bar start  -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Girish's E-Commerce</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <!-- product link  -->
              <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
              </li>

              <!-- about us link  -->
              <li class="nav-item">
                <a href="" class="nav-link">About Us</a>
              </li>
              <!-- contact us link  -->
              <li class="nav-item">
                <a href="" class="nav-link">Contact Us</a>
              </li>
              <!-- cart link  -->
              <li class="nav-item">
                <a href="./Cart.html" class="nav-link">Cart</a>
              </li>

              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <!-- login link  -->
              <li class="nav-link">
                <a href="./Login.html" class="btn btn-outline-success">Login</a>
              </li>
              <!-- Registration  link  -->
              <li class="nav-link">
                <a href="./Registration.html" target="_blank"    class="btn btn-outline-warning">Register</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <!-- nav bar end  --> 
    <!-- section 1 -->
      <div class=" section-1 container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6 d-flex flex-column align-self-center">
                <h1 class="section-1-heading text-center text-white ">
                    Welcome to Girish's E-commerce
                </h1>
                <a href="#Products" class="btn btn-outline-light m-4">Explore Our Products</a>

            </div>
            <div class="col-sm-12 col-md-6">
              <dotlottie-player class="mx-auto" src="https://lottie.host/1e4fb3a8-8aa7-47e2-b633-10c9e83fac94/zzPVF5hRfi.json" background="transparent" speed="1" style="width: 600px; height: 400px;" loop autoplay></dotlottie-player>
            </div>
        </div>
      </div>
    <!-- section 1 end  -->
    <hr>
     <!-- section 2 -->
     <div class="container">
        <div class="row">
            <h2 class="text-dark text-center">Categories</h2>
                 
            
            <!-- categories 1 -->
           
           
            <div class="col-sm-12 col-md-4">
                <div class="card">
                    <img src="./Assets/Images/cosemtics.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Cosmetics</h5>
                      <p class="card-text">
                        <ul>
                          <li>Lipstick</li>
                          <li>Glower</li>
                          <li>Shades</li>
                        </ul>
                      </p>
                      <a href="#" class="btn btn-primary">Explore More</a>
                    </div>
                  </div>
           
            </div>
            <!-- categories 1 end  -->
             <!-- categories 2 -->
           
           
             <div class="col-sm-12 col-md-4">
                <div class="card">
                    <img src="./Assets/Images/electronics.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Electronics</h5>
                      <p class="card-text">
                        <ul>
                          <li>Laptops</li>
                          <li>Adapters</li>
                          <li>Chargers</li>
                        </ul>
                      </p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
           
            </div>
            <!-- categories 2 end  -->
             <!-- categories 3 -->
           
           
             <div class="col-sm-12 col-md-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
           
            </div>
            <!-- categories 3 end  -->
        </div>
      </div>
    <!-- section 2 end  -->
    <hr>
     <!-- section 3 -->
     <div class="container" id="Products">
        <div class="row">
          <h2 class="text-dark text-center">Products</h2>
            
              <!-- categories 1 -->
           
           
            <div class="col-sm-12 col-md-4">
              <div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
         
          </div>
          <!-- categories 1 end  -->
           <!-- categories 2 -->
         
         
           <div class="col-sm-12 col-md-4">
              <div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
         
          </div>
          <!-- categories 2 end  -->
           <!-- categories 3 -->
         
         
           <div class="col-sm-12 col-md-4">
              <div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
         
          </div>
          <!-- categories 3 end  -->

            </div>
        </div>
      </div>
    <!-- section 3 end  -->


   





























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- lottie script  -->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
    <!-- custom js  -->
    <script src="./Assets/JS/main.js"></script>


  </body>
</html>