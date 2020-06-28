<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Medical Books Online</title>
  <link rel="stylesheet" href="style2.css">
</head>

<body>

  <div class="page__content">
    <section>
      <div class="container">
        <div class="row">
          <!-- wrapper -->
          <div class="col shoping_card_body">
            <h2>Available Now</h2>
            <p class="cart__icon">
              <a href="cart.html">
                <i class="shopping-cart"></i>
              </a>
              <span class="cart__number">0</span>
            </p>
            <div class="clr"></div>
            <!-- items -->
            <div class="items">

              <!-- single item -->
              <div class="item">
                <img src="images/lecture-1.jpg" alt="lecture-1">
                <h3>Lecture 01</h3>
                <p>
                  <span>Online</span>
                </p>
                <p>
                  PRICE: 80 BDT
                </p>
                <button class="add-to-cart" type="button">
                  ADD TO CART
                </button>
              </div>
              <!--/ single item -->

              <!-- single item -->
              <div class="item">
                <img src="images/lecture-1.jpg" alt="lecture-1">
                <h3>Lecture 01</h3>
                <p>
                  <span>Hard Copy</span>
                </p>
                <p>
                  PRICE: 120 BDT
                </p>
                <button class="add-to-cart" type="button">
                  ADD TO CART
                </button>
              </div>
              <!--/ single item -->

              <!-- single item -->
              <div class="item">
                <img src="images/lecture-1.jpg" alt="lecture-1">
                <h3>Lecture 02</h3>
                <p>
                  <span>Online</span>
                </p>
                <p>
                  PRICE: 80 BDT
                </p>
                <button class="add-to-cart" type="button">
                  ADD TO CART
                </button>
              </div>
              <!--/ single item -->

              <!-- single item -->
              <div class="item">
                <img src="images/lecture-1.jpg" alt="lecture-1">
                <h3>Lecture 02</h3>
                <p>
                  <span>Hard Copy</span>
                </p>
                <p>
                  PRICE: 120 BDT
                </p>
                <button class="add-to-cart" type="button">
                  ADD TO CART
                </button>
              </div>
              <!--/ single item -->

              <!-- single item -->
              <div class="item">
                <img src="images/lecture-1.jpg" alt="lecture-1">
                <h3>Lecture 03</h3>
                <p>
                  <span>Online</span>
                </p>
                <p>
                  PRICE: 80 BDT
                </p>
                <button class="add-to-cart" type="button">
                  ADD TO CART
                </button>
              </div>
              <!--/ single item -->

              <!-- single item -->
              <div class="item">
                <img src="images/lecture-1.jpg" alt="lecture-1">
                <h3>Lecture 03</h3>
                <p>
                  <span>Hard Copy</span>
                </p>
                <p>
                  PRICE: 120 BDT
                </p>
                <button class="add-to-cart" type="button">
                  ADD TO CART
                </button>
              </div>
              <!--/ single item -->

              <!-- single item -->
              <div class="item">
                <img src="images/lecture-1.jpg" alt="lecture-1">
                <h3>Lecture 04</h3>
                <p>
                  <span>Online </span>
                </p>
                <p>
                  PRICE: 80 BDT
                </p>
                <button class="add-to-cart" type="button">
                  ADD TO CART
                </button>
              </div>
              <!--/ single item -->

              <!-- single item -->
              <div class="item">
                <img src="images/lecture-1.jpg" alt="lecture-1">
                <h3>Lecture 04</h3>
                <p>
                  <span>Hard Copy</span>
                </p>
                <p>
                  PRICE: 120 BDT
                </p>
                <button class="add-to-cart" type="button">
                  ADD TO CART
                </button>
              </div>
              <!--/ single item -->

            </div>
            <!--/ items -->
          </div>
          <!--/ wrapper -->
        </div>
      </div>
    </section>
  </div>



  <footer>
    <p class="text-center">Copyright &copy; 2020
      <a class="btn-link" href="{{ route('home') }}" action="{{ route('home') }}">MedicalBooksOnline.Net</a>
    </p>
  </footer>


  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script>
    var cartValue = 0;
    var cartNumber = document.querySelector(".cart__number");
    cartNumber.innerHTML = cartValue;

  </script>
  <script src="js/index.js"></script>
</body>

</html>
