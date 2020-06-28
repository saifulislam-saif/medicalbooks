<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no" />
    <meta name="description" content="MedicalBooks is best online medical platform of Bangladesh" />
    <meta name="keywords" content="Medical, Books, Online, FCPS, BCPS, Last Hour" />
    <meta name="author" content="GENESIS" />

    <!-- Refresh -->
    <meta http-equiv="refresh" content="1800" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css">

    <!-- venobox css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.0/venobox.min.css">

    <!-- Others css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs/themes/prism.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/noty/lib/noty.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/noty/lib/themes/relax.css">

    <link rel="stylesheet" href="{{ asset('assets/sidebar-css-js/css/metismenujs.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/sidebar-css-js/css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/sidebar-css-js/css/mm-vertical.css') }}" />

    <!-- Custom CSS Link -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/loginpage.css') }}">

    <!-- Custom CSS for responsive -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- icon -->
    <link rel="icon" href="images/icon.png" type="image/png" sizes="16x16" />

    <title>MedicalBooksOnline.Net</title>

</head>

<body class="d-flex flex-column h-100">

    <header id="menu_part">
        <!-- Fixed navbar -->
        <nav class="navbar main_menu navbar-expand-lg p-0 fixed-top">
            <div class="container px-0">
                <a class="navbar-brand" href="{{ route('home') }}" action="{{ route('home') }}">
                    <img class="" src="{{ asset('assets/img/logo_white.png') }}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto m-sm-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}" action="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">My Books <span>(0)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>

                    <!-- User Part-->
                    <div class="ml-auto user__part">
                        <div class="profile_menu">
                            <a class="profile" href="{{ url('myaccount') }}" action="{{ url('myaccount') }}">
                                <i class="fa fa-user-circle"></i> <span>Profile</span>
                            </a>
                            <a class="log__out" href="" title="Sign Out" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                Out</a>
                            <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                    <div class="cart_button">
                        <a class="nav-link cart_button " href="{{ url('cart-page') }}">
                            <span><?php echo ($items)?$items:0; ?></span>
                            <img src="{{ asset('assets/img/cart.png') }}" alt="cart">
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Content Part Start -->

    @yield('content')





    <!-- Content Part End -->

    <footer class="footer mt-auto">
        <div class="container">
            <p class="text-center">Copyright &copy; 2020
                <a class="btn-link" href="{{ route('home') }}" action="{{ route('home') }}">MedicalBooksOnline.Net</a>
            </p>
        </div>
    </footer>


    <!-- JavaScript and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>


    <!-- jQuery plugins for filter-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        //date countdown
        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            document.querySelector(".card_rate").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";
            if (distance < 0) {
                clearInterval(x);
                document.querySelector(".card_rate").innerHTML = "EXPIRED";
            }
        }, 1000);

    </script>


    <script src="js/script.js"></script>

    @yield('js')

</body>

</html>
