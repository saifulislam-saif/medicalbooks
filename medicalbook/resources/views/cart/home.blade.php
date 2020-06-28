<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Medical Books Online</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style3.css') }}">
</head>

<body>

  <div class="page__content">
    <section>
      <div class="container">
        <div class="row">
          <!-- wrapper -->
          <div class="col shoping_card_body">
            <!-- items -->
            <div class="items">
              <!-- single item -->
              <div class="item">
                <img src="images/last-hour-1.jpg" alt="last_hour_v1">
                <h3>Last Hour Book</h3>
                <p>
                  Avilable Online &amp; Ofline
                </p>
                <button class="" type="button" style="margin-left: 50px;">
                  <a href="books-index.html">
                    Details
                  </a>
                </button>
              </div>
              <!--/ single item -->
              <!-- single item -->
              <div class="item">
                <img src="images/lecture-1.jpg" alt="lecture-1">
                <h3>Lecture Sheet</h3>
                <p>
                  Avilable Online &amp; Ofline
                </p>
                <button class="" type="button" style="margin-left: 50px;">
                  <a href="lecture-index.html">
                    Details
                  </a>
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
  <script src="js/index.js"></script>
</body>

</html>
