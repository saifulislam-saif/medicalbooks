<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Shopping Cart</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="style2.css">
</head>

<body class="bg-light">
  <div class="page__content">
    <header id="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="home.html" class="navbar-brand">
          <h3 class="px-5">
            <i class="fas fa-shopping-basket"></i>
            Shopping Cart
          </h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="mr-auto"></div>
          <div class="navbar-nav">
            <a href="" class="nav-item nav-link active">
              <h5 class="px-5 cart">
                <i class="fas fa-shopping-cart"></i>
                Cart
                <span id="cart_count" class="text-warning bg-light">3</span> </h5>
            </a>
          </div>
        </div>
      </nav>
    </header>

    <div class="container px-0">
      <div class="row mt-2">
        <div class="col-md-8">
          <div class="shopping-cart">
            <h4 class="text-uppercase">My Cart</h4>
            <hr>


            <form action="" method="" class="cart-items">
              <div class="border rounded">
                <div class="row bg-white mx-0 align-items-center">
                  <div class="col-md-2 pl-0">
                    <img src="./images/last-hour-1.jpg" alt="Image1" class="img-fluid">
                  </div>
                  <div class="col-md-6">
                    <h5 class="">Last Hour v1</h5>
                    <button type="submit" class="btn btn-danger" name="remove">Remove</button>
                  </div>
                  <div class="col-md-4 text-center">
                    <h4 class="">$900</h4>
                    <div class="">
                      <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-minus"></i></button>
                      <input type="text" value="1" class="product_counter form-control w-25 d-inline text-center">
                      <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-plus"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </form>


            <form action="" method="" class="cart-items">
              <div class="border rounded">
                <div class="row bg-white mx-0 align-items-center">
                  <div class="col-md-2 pl-0">
                    <img src="./images/lecture-1.jpg" alt="Image1" class="img-fluid">
                  </div>
                  <div class="col-md-6">
                    <h5 class="">Lecture Sheet 1</h5>
                    <button type="submit" class="btn btn-danger" name="remove">Remove</button>
                  </div>
                  <div class="col-md-4 text-center">
                    <h4 class="">$90</h4>
                    <div class="">
                      <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-minus"></i></button>
                      <input type="text" value="1" class="product_counter form-control w-25 d-inline text-center">
                      <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-plus"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </form>


            <form action="" method="" class="cart-items">
              <div class="border rounded">
                <div class="row bg-white mx-0 align-items-center">
                  <div class="col-md-2 pl-0">
                    <img src="./images/lecture-1.jpg" alt="Image1" class="img-fluid">
                  </div>
                  <div class="col-md-6">
                    <h5 class="">Lecture Sheet 3</h5>
                    <button type="submit" class="btn btn-danger" name="remove">Remove</button>
                  </div>
                  <div class="col-md-4 text-center">
                    <h4 class="">$100</h4>
                    <div class="">
                      <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-minus"></i></button>
                      <input type="text" value="1" class="product_counter form-control w-25 d-inline text-center">
                      <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-plus"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4 border rounded mt-2 bg-white h-25">
          <div class="pt-3">
            <h6>PRICE DETAILS</h6>
            <hr>
            <div class="row price-details my-0">
              <div class="col-md-6">
                <h6>Price (3 items)</h6>
                <h6>Delivery Charges</h6>
                <hr>
                <h6>Amount Payable</h6>
              </div>
              <div class="col-md-6">
                <h6>$1090</h6>
                <h6 class="text-success">FREE</h6>
                <hr>
                <h6>$1090</h6>
              </div>
              <div class="col-12 pay_button text-center mt-2 mb-3">
                <hr>
                <a href="#" class="btn btn-primary">Pay Noy</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

  <footer>
    <p class="text-center">Copyright &copy; 2020
      <a class="btn-link" href="{{ route('home') }}" action="{{ route('home') }}">MedicalBooksOnline.Net</a>
    </p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
