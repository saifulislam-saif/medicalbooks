<!DOCTYPE html>
<html lang="en">

<head>
    @include ('html_head')
</head>

<body>
    @include ('header')

    <div class="page__content">
        <div class="body">




            <!-- =================== Books Card Start =================== -->
            <section id="card_part">
                <div class="container card_body_mobile px-0">
                    <div class="row justify-content-center">


                        @foreach($books as $book)
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mix">
                            <div class="card card_bg" style="width: 100%">
                                <div class="img">
                                    <img class="card-img-top img-fluid w-100" src="<?php echo $book['image']; ?>">
                                    <div class="overly">
                                        <button type="button" class="border-0" data-toggle="modal" data-target="#exampleModalLong{{$book->id}}">
                                            <i class="fa fa-book"></i>
                                        </button>
                                    </div>

                                    <!-- ========== Read Some of Book ========== -->

                                    <div class="modal fade bd-example-modal-lg" style="z-index: 10000;" id="exampleModalLong{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="exampleModalLongTitle">
                                                        {{ $book->book_name }}</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                    @if ($book->subscription)

                                                    <a target="_blank" href="{{url('book-detail/'.$book->id)}}" class="btn">Read Now</a>

                                                    @else
                                                    <a href="https://banglamedexam.com/user-login-book?user_id={{Auth::id()}}&book_id={{$book->id}}&amount={{$book->price}}" class="btn">Pay Now</a>

                                                    @endif


                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                </div>
                                <div class="card-body mb-2 mx-2 p-0 py-2 text-center">
                                    <h5 class="card_title">{{ $book->book_name }}</h5>



                                    <script>
                                        var countDownDate = new Date("Jun 1, 2021 15:37:25").getTime();

                                    </script>

                                    <p class="card_rate">Available for <span>365</span> days</p>

                                    @if($book->coupon_code)

                                    <a target="_blank" href="{{url('book-detail/'.$book->id)}}" class="btn">Read Now</a>

                                    @else
                                    <a target="_blank" href="{{url('book-detail/'.$book->id)}}" class="btn" data-toggle="modal" data-target="#exampleLecture{{$book->id}}">Read Now</a>

                                    <div class="modal fade" style="z-index: 10000;" id="exampleLecture{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="exampleModalLongTitle">
                                                        Reading Option:</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body py-0" style="background: #00000005">

                                                    <ul class="" style="background: transparent;">
                                                        {!! Form::open(['url'=>'coupon-code','files'=>true ,'class'=>'coupon']) !!}
                                                        <li class="d-flex justify-content-between border-bottom py-1">
                                                            <h4>With Code</h4>
                                                            <input type="text" name="coupon_code">

                                                            <input type="hidden" name="book_id" value="{{$book->id}}">
                                                            <button type="submit" class="btn bg-primary text-white">Submit Code</button>
                                                        </li>
                                                        <p class="text-light bg-danger unsuccess"></p>
                                                        {!! Form::close() !!}
                                                        <!-- <li class="d-flex justify-content-between border-bottom py-1">
                                                        <h4>Subscribe for Reading</h4>
                                                        <a href="#" class="btn bg-primary text-white">Subscribe</a>
                                                    </li> -->
                                                    </ul>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    @endif
                                    <script>
                                        document.querySelector(".mix").classList.add("my_books");

                                    </script>
                                    <a href="https://banglamedexam.com/user-login-book?user_id={{Auth::id()}} book_id={{$book->id}}&amount={{$book->price}}" class="btn">Pay Now</a>
                                    <p class="card_rate"><span>{{ $book->price }}</span> BDT Per Year</p>


                                </div>

                            </div>
                        </div>
                        @endforeach


                        <!-- =================== Books Card End =================== -->

                    </div>
                </div>
            </section>

            @include ('about')
            @include ('contact')



        </div>
    </div>


    @include ('footer')


    <script>
        //my_books counter
        (function() {
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

        //submit
        $(document).ready(function() {
            $(".coupon").submit(function(e) {

                e.preventDefault();

                var book_id = $(this).find("[name='book_id']").val();
                var coupon_code = $(this).find("[name='coupon_code']").val();

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    type: "POST",
                    url: 'coupon-code',
                    dataType: 'HTML',
                    data: {
                        book_id: book_id,
                        coupon_code: coupon_code
                    },
                    success: function(data) {
                        if (data != 'success') {
                            $('.unsuccess').html(data);
                        } else {
                            window.location.replace("/book-detail/" + book_id);
                        }

                    }
                });

                // alert(book_id);


            })
        });
        // var containerEl = document.querySelector('.filter_box');

        // var mixer = mixitup(containerEl);

    </script>
</body>

</html>
