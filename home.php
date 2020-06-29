<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <?php include 'head-link.php';?>
</head>

<body class="d-flex flex-column h-100">

    <?php include 'header.php';?>






    <!-- =================== Books Card Start =================== -->
    <section id="card_part">
        <div class="container card_body_mobile px-0">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mix">
                    <div class="card card_bg" style="width: 100%">
                        <div class="img">
                            <img class="card-img-top img-fluid w-100" src="images/book-1.jpg">
                            <div class="overly">
                                <button type="button" class="border-0" data-toggle="modal" data-target="#exampleModalLong-book-id">
                                    <i class="fa fa-book"></i>
                                </button>
                            </div>

                            <!-- ========== Read Some of Book ========== -->

                            <div class="modal fade bd-example-modal-lg" style="z-index: 10000;" id="exampleModalLong-book-id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLongTitle">Last Hour</h3>
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
                                            </p>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a target="_blank" href="book.php" class="btn">Read Now</a>
                                            <a href="#" class="btn">Pay Now</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card-body mb-2 mx-2 p-0 py-2 text-center">
                            <h5 class="card_title">Last Hour</h5>

                            <script>
                                var countDownDate = new Date("Jun 1, 2021 15:37:25").getTime();

                            </script>

                            <p class="card_rate">Available for <span>365</span> days</p>

                            <a target="_blank" href="" class="btn" data-toggle="modal" data-target="#exampleLecture-book-id">Subscribe</a>

                            <div class="modal fade" style="z-index: 10000;" id="exampleLecture-book-id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">
                                                Reading Option:</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body py-0" style="background: #00000005">

                                            <ul class="" style="background: transparent;">
                                                <li class="d-flex justify-content-between border-bottom py-1">
                                                    <h6>With Code</h6>
                                                    <input type="text" name="coupon_code">
                                                    <a href="book.php" type="submit" class="btn bg-primary text-white">Submit Code</a>
                                                </li>
                                                <p class="text-light bg-danger unsuccess"></p>
                                                <li class="d-flex justify-content-between border-bottom py-1">
                                                    <h6>Subscribe for Reading</h6>
                                                    <a href="#" class="btn bg-primary text-white">Subscribe</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <a href="#" class="btn">Add to Cart</a>
                            <p class="card_rate"><span>700</span> BDT Per Year</p>


                        </div>

                    </div>
                </div>


                <!-- =================== Books Card End =================== -->

            </div>
        </div>
    </section>



    <?php include 'footer.php';?>
    
    <?php include 'js-link.php';?>

</body>

</html>
