<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MedicalBooksOnline.Net</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!--    <link rel="stylesheet" href="css/bootstrap.min.css">-->

    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">

    <!-- Custom CSS for responsive -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>

    <header id="menu_part">
        <nav class="navbar main_menu main_menu-fixed navbar-expand-lg p-0">
            <div class="container px-0">
                <a class="navbar-brand" href="{{ route('home') }}" action="{{ route('home') }}">
                    <img class="" src="../assets/img/logo_white.png" alt="logo">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto m-sm-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}" action="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">My Books <span>(5)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>

                    <!--Search option for books-->
                    <div class="ml-auto user__part">
                        <form class="form-inline my-2 my-lg-0 search_box-wrapper">
                            <div class="input-group mb-0">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <input id="myInput" class="form-control mr-0 search_box" type="search"
                                    placeholder="Search book" aria-label="Search" onkeyup="myFunction()">
                            </div>

                        </form>

                        <div class="profile_menu">
                            <a class="profile" href="{{ url('myaccount') }}" action="{{ url('myaccount') }}">
                                <i class="fa fa-user-circle"></i> <span>Profile</span>
                            </a>
                            <a class="log__out" href="" title="Sign Out"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                Out</a>
                            <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="page__content">
        <div class="body">
            <section id="card_part">
                <div class="container card_body_mobile px-0">
                    <div class="row justify-content-center">


                        <!-- Lecture Sheet Start -->

                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mix">
                            <div class="card card_bg" style="width: 100%">
                                <div class="img">
                                    <img class="card-img-top img-fluid w-100" src="images/lecture-sheet.jpg">
                                    <div class="overly">
                                        <button type="button" class="border-0" data-toggle="modal"
                                            data-target="#exampleModalLong">
                                            <i class="fa fa-book"></i>
                                        </button>
                                    </div>

                                    <!-- ========== Read Some of Lecture Sheet ========== -->

                                    <div class="modal fade bd-example-modal-lg" style="z-index: 10000;"
                                        id="exampleModalLong" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="exampleModalLongTitle">
                                                        Lecture Sheet</h3>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>Lorem ipsum dolor</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab
                                                        tenetur tempore quia, molestiae aliquid pariatur obcaecati
                                                        accusamus aperiam sunt quis dolore est porro enim saepe ullam,
                                                        sint eligendi. Excepturi harum, assumenda eum sint enim placeat.
                                                        Quasi harum eos eum iure, sequi neque consequatur aspernatur,
                                                        laudantium accusantium optio veniam cum corrupti modi libero.
                                                        Iure, nam tempore ipsam, sapiente doloremque maiores, esse at
                                                        unde quam ratione delectus distinctio rem! Sunt porro inventore
                                                        eveniet quod! Ratione numquam architecto consequuntur! Mollitia
                                                        molestiae dolorem maiores vitae deleniti explicabo, minus
                                                        asperiores. Atque magni et esse debitis quod velit optio
                                                        nesciunt est magnam eaque animi recusandae laboriosam ad quas
                                                        soluta necessitatibus totam iste quae fugiat unde incidunt,
                                                        reiciendis voluptates sit? Perferendis recusandae et natus
                                                        asperiores tenetur velit nihil ratione quas autem eligendi hic,
                                                        numquam sit, impedit, beatae in accusamus doloribus animi
                                                        dolores nobis id aliquam quis maiores aliquid! Dolore animi ut
                                                        amet veritatis perspiciatis sit consequuntur ea nulla eligendi
                                                        recusandae. Cum accusamus voluptatibus ea fugiat expedita atque
                                                        eum, qui dolores cumque! Illum maxime, tempora, exercitationem
                                                        odio aspernatur autem excepturi quisquam vel repudiandae porro
                                                        molestiae ea laboriosam, recusandae fuga sint laudantium quos
                                                        animi dolore magni dolorum. Voluptatibus vitae quidem quae
                                                        minima temporibus labore magnam saepe, mollitia ducimus modi
                                                        ipsam! Earum repudiandae soluta maiores molestiae sit atque!
                                                        Provident amet dignissimos, error, nihil quidem eligendi quae
                                                        molestias accusantium explicabo, ipsam officia a neque suscipit?
                                                        Recusandae molestias esse tenetur. Obcaecati asperiores quidem,
                                                        dicta aut error explicabo ab illo, magni sapiente natus omnis
                                                        tenetur voluptates harum dolores saepe sit consequatur
                                                        reiciendis odit minus doloremque maxime eum voluptatem!
                                                        Architecto fugit, ex odio nesciunt eum modi unde iste
                                                        repudiandae mollitia eos? Laborum odit nihil voluptates
                                                        veritatis neque commodi obcaecati debitis ab reiciendis vitae
                                                        corporis excepturi magnam est doloremque ipsum, deleniti
                                                        blanditiis. Eos, reprehenderit! Neque culpa rerum tempora nam ad
                                                        ipsum. Aspernatur accusamus velit temporibus dicta perspiciatis
                                                        sed, iure laborum culpa voluptates quasi facere saepe ut
                                                        delectus qui consequuntur. Explicabo a soluta nihil facilis
                                                        quisquam numquam pariatur totam quia qui magni, modi asperiores
                                                        dolore cum! Tempore aliquid vero harum nam quidem quo nihil
                                                        dolore tenetur natus ut, quae veritatis cumque eveniet
                                                        exercitationem unde quas, possimus nulla sapiente illum non ex
                                                        optio voluptates. Ratione assumenda debitis reprehenderit rerum
                                                        est eaque alias, totam quia? Deserunt at laudantium nesciunt
                                                        numquam, porro suscipit. Illo voluptatibus, reprehenderit magnam
                                                        cum assumenda perferendis nam quaerat quidem quibusdam, tempore
                                                        pariatur vel consequatur numquam dolores fugiat fuga aperiam
                                                        excepturi rem. Ut laborum aliquam autem asperiores libero veniam
                                                        illo distinctio repellendus totam, dolor maxime voluptatem rerum
                                                        mollitia quas labore dolorum, iusto eius? Corporis eaque
                                                        sapiente autem id velit, architecto obcaecati quibusdam
                                                        explicabo ratione veritatis pariatur deserunt odio sunt, nulla
                                                        illum unde temporibus animi iusto quis. Blanditiis vel numquam
                                                        totam sequi dolores earum fugiat repellendus ratione cupiditate
                                                        doloribus, laborum omnis facilis vitae, molestias commodi
                                                        dignissimos ducimus ullam quo pariatur debitis rem harum
                                                        consequatur corporis dolore. Porro enim, nihil sequi eum nobis
                                                        omnis facilis ducimus mollitia, laudantium ad tempore officia
                                                        numquam placeat maxime. Repellendus earum fugiat, iste
                                                        consequuntur, magnam praesentium accusamus est natus voluptas
                                                        vero, doloremque veniam?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                </div>
                                <div class="card-body mb-2 mx-2 p-0 py-2 text-center">
                                    <h5 class="card_title">Lecture Sheets</h5>
                                    <p class="card_rate"><span>7</span> Lecture are available</p>
                                    <a href="#" class="btn" data-toggle="modal" data-target="#exampleLecture">Choice
                                        Now</a>
                                </div>

                                <!-- Lecture Modal Start -->
                                @foreach($lecture_sheets as $lecture_sheet)
                                <div class="modal fade" style="z-index: 10000;" id="exampleLecture" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLongTitle">
                                                    All Lecture Sheets List:</h3>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body py-0"  style="background: #00000005">

                                                <ul class="" style="background: transparent;">
                                                    <li class="d-flex justify-content-between border-bottom py-1">
                                                        <h4>{{$lecture_sheet->lecture_name}}</h4>
                                                        <a href="#" class="btn bg-primary text-white">Add to Pay</a>
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- Lecture Modal End -->

                            </div>
                        </div>

                        <!-- Lecture Sheet End -->



                    </div>
                </div>
            </section>

            <section id="about">
                <div class="container px-lg-0 text-justify">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-center">About Us</h1>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At nulla mollitia neque ullam
                                est
                                ratione dolore laborum, quisquam non velit aliquam laboriosam aut ducimus doloribus nisi
                                consectetur labore perspiciatis fugit.
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse iure, consequuntur ex et
                                quis
                                tempore quaerat minus obcaecati nostrum nesciunt eligendi dolores quisquam? A porro
                                itaque
                                ex corrupti amet repellat.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus amet nam, corporis
                                id
                                neque, cumque quod rem, eligendi ab dignissimos ratione? Amet adipisci dicta tempora
                                facilis, quidem aliquid saepe similique.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. At nulla mollitia neque ullam
                                est
                                ratione dolore laborum, quisquam non velit aliquam laboriosam aut ducimus doloribus nisi
                                consectetur labore perspiciatis fugit.
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse iure, consequuntur ex et
                                quis
                                tempore quaerat minus obcaecati nostrum nesciunt eligendi dolores quisquam? A porro
                                itaque
                                ex corrupti amet repellat.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus amet nam, corporis
                                id
                                neque, cumque quod rem, eligendi ab dignissimos ratione? Amet adipisci dicta tempora
                                facilis, quidem aliquid saepe similique.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact">
                <div class="container px-lg-0 text-justify">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-center">Contact Us</h1>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At nulla mollitia neque ullam
                                est
                                ratione dolore laborum, quisquam non velit aliquam laboriosam aut ducimus doloribus nisi
                                consectetur labore perspiciatis fugit.
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse iure, consequuntur ex et
                                quis
                                tempore quaerat minus obcaecati nostrum nesciunt eligendi dolores quisquam? A porro
                                itaque
                                ex corrupti amet repellat.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus amet nam, corporis
                                id
                                neque, cumque quod rem, eligendi ab dignissimos ratione? Amet adipisci dicta tempora
                                facilis, quidem aliquid saepe similique.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. At nulla mollitia neque ullam
                                est
                                ratione dolore laborum, quisquam non velit aliquam laboriosam aut ducimus doloribus nisi
                                consectetur labore perspiciatis fugit.
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse iure, consequuntur ex et
                                quis
                                tempore quaerat minus obcaecati nostrum nesciunt eligendi dolores quisquam? A porro
                                itaque
                                ex corrupti amet repellat.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus amet nam, corporis
                                id
                                neque, cumque quod rem, eligendi ab dignissimos ratione? Amet adipisci dicta tempora
                                facilis, quidem aliquid saepe similique.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>



    <footer>
        <p class="text-center">Copyright &copy; 2020
            <a class="btn-link" href="{{ route('home') }}" action="{{ route('home') }}">MedicalBooksOnline.Net</a>
        </p>
    </footer>







    <script>
        //my_books counter
        (function () {
            const mainDiv = document.getElementById("card_part");
            const myBooks = mainDiv.getElementsByClassName("my_books");
            let target = document.querySelector('.main_menu .navbar-nav .nav-item .nav-link span');
            target.innerHTML = " (" + myBooks.length + ") ";
        })();

        //header search box
        function myFunction() {
            let input, filter, wrapper, item, value, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            wrapper = document.getElementById("card_part");
            item = wrapper.getElementsByClassName("mix");
            for (i = 0; i < item.length; i++) {
                value = item[i].getElementsByTagName("h5")[0];
                txtValue = value.textContent || value.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    item[i].style.display = "";
                } else {
                    item[i].style.display = "none";
                }
            }
        }


        //date countdown
        var x = setInterval(function () {
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









    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!--    <script src="js/jquery-1.12.4.min.js"></script>-->
    <!--    <script src="js/popper.min.js"></script>-->
    <!--    <script src="js/bootstrap.min.js"></script>-->


    <!-- jQuery plugins for filter-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script> -->

    <!--    <script src="js/mixitup.min.js"></script>-->

    <script src="js/script.js"></script>

    <script>
        // var containerEl = document.querySelector('.filter_box');

        // var mixer = mixitup(containerEl);
    </script>
</body>

</html>