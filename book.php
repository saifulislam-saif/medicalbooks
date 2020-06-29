<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <?php include 'head-link.php';?>
</head>

<body class="d-flex flex-column h-100">

    <?php include 'header.php';?>

    <!-- Book Part Start -->
    <section>
        <div class="container-fluid p-md-0">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <nav class="sidebar-nav sidebar_menu">
                        <ul class="metismenu" id="menu1">
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">Subject One</a>
                                <ul>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Chapter One</a>
                                        <ul>
                                            <li><a href="#topic-1-1-1">Topic One</a></li>
                                            <li><a href="#topic-1-1-2">Topic Two</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Chapter Two</a>
                                        <ul>
                                            <li><a href="#topic-1-2-1">Topic One</a></li>
                                            <li><a href="#topic-1-2-2">Topic Two</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false">Subject Two</a>
                                <ul>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Chapter One</a>
                                        <ul>
                                            <li><a href="#topic-2-1-1">Topic One</a></li>
                                            <li><a href="#topic-2-1-2">Topic Two</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Chapter Two</a>
                                        <ul>
                                            <li><a href="#topic-2-2-1">Topic One</a></li>
                                            <li><a href="#topic-2-2-2">Topic Two</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <span class="sidebar__controller"><i class="fa fa-caret-right"></i></i></span>
                </div>

                <div id="book__body" class="col-lg-9 col-md-8 col-sm-12 book_body">
                    <!-- Subject title -->
                    @foreach($subjects as $subject)
                    <h3 class="text-center text-uppercase text-primary border-bottom border-top my-4 py-0">{{ $subject->subject_name }}
                    </h3>

                    <div id="chapter_1-id" class="chapter">
                        <!-- Chapter title -->
                        @foreach($subject->chapters as $chapter)
                        <h4 class="text-center text-uppercase border-bottom my-2 py-0">{{ $chapter->chapter_name }}</h4>

                        <div id="topic_1-1-id" class="topic mt-3">
                            <!-- Topic title -->
                            @foreach($chapter->topics as $topic)
                            <h5 class="text-uppercase border-bottom my-2 py-0 d-inline-block">{{ $topic->topic_name }}</h5>

                            <!-- Q Start -->
                            <div class="Q card">
                                <div class="card-body">
                                    @foreach($topic->questions as $question)
                                    <div class="q_body">
                                        <h5 class="card-title"><span>{{ $question->question_title }}</span>
                                        </h5>

                                        <form>
                                            <div class="table-responsive">
                                                <table class="table table-borderless">
                                                    @foreach($question->question_answers as $answer)
                                                    <tr>
                                                        <td width="30" class="p-0 text-center">
                                                            <input class="tf_ans_input" type="radio" name="a-q-id" id="t-a-q-id">
                                                            <label class="tf_ans" for="t-a-q-id">T</label>
                                                        </td>
                                                        <td width="30" class="p-0 text-center">
                                                            <input class="tf_ans_input" type="radio" name="a-q-id" id="f-a-q-id">
                                                            <label class="tf_ans" for="f-a-q-id">F</label>
                                                        </td>

                                                        <td class="p-0 pl-md-2">
                                                            {{isset($answer->answer)? $answer->answer:''}}
                                                        </td>

                                                    </tr>
                                                    @endforeach

                                                </table>
                                            </div>
                                        </form>
                                    </div>


                                    <br />

                                    <!--Ans Button Start-->
                                    <button type="button" onclick="testAns()" class="btn btn-primary" data-toggle="modal" data-target="#ans-Q-id">Ans.</button>
                                    <!--Ans Button End-->


                                    <!--Explanation Modal Start-->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#explanation-Q-id">Explanation</button>

                                    <div class="modal fade bd-example-modal-lg" id="explanation-Q-id" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Explanation
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <!-- content start -->
                                                    <div class="card card-body">
                                                        <ul>
                                                            <li><span>a)</span> Organelles involved in protein
                                                                synthesis are - Ribosome, RER and Mitochondria
                                                            </li>
                                                            <li><span>c)</span> Providing the eukaryotic cells
                                                                with
                                                                the ability to form the energy rich compound ATP
                                                                by
                                                                oxidative phosphorylation.</li>
                                                            <li><span>d)</span> Play role in the regualtion of
                                                                apoptosis but oxidative phosphorylation is most
                                                                crucial. </li>
                                                        </ul>
                                                    </div>
                                                    <!-- content end -->

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Explanation Modal end-->


                                    <!--Reference Modal Start-->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reference-Q-id">Reference</button>

                                    <div class="modal fade bd-example-modal-sm" id="reference-Q-id" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Reference
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <!-- content start -->
                                                    <div class="card card-body">
                                                        <ul>
                                                            <li><a class="btn-link" href="#">Janqueira's/15th/P-38</a></li>
                                                            <li><a class="btn-link" href="#">Ganong/25th/P-36</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- content end -->

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Reference Modal end-->


                                    <!--Comment Modal Start-->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#comment-Q-id">Comment</button>


                                    <div class="modal fade" id="comment-Q-id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Comments
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <textarea placeholder="Write your comment ..." class="form-control" id="message-text"></textarea>
                                                            <button type="button" class="btn btn-primary float-right mt-1">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <h6 class="mr-auto text-uppercase">Your previous comments:</h6>
                                                    <div class="card card-body mr-5">
                                                        <span class="text-black text-uppercase">Dr. User Name</span>
                                                        <span class="text-black-50">2:20PM, 2 JUN 2020</span>
                                                        <p class="text-left">Lorem ipsum dolor sit amet consectetur
                                                            adipisicing elit. Obcaecati perferendis mollitia vel?
                                                            Quidem, temporibus error animi expedita mollitia
                                                            incidunt.</p>
                                                    </div>

                                                    <div class="card card-body ml-5">
                                                        <span class="text-black text-uppercase">Admin of
                                                            MedicalBooks</span>
                                                        <span class="text-black-50">11:22AM, 1 JUN 2020</span>
                                                        <p class="text-left">Lorem, ipsum dolor sit amet consectetur
                                                            adipisicing.</p>
                                                    </div>

                                                    <div class="card card-body mr-5">
                                                        <span class="text-black text-uppercase">Dr. User Name</span>
                                                        <span class="text-black-50">10:20AM, 1 JUN 2020</span>
                                                        <p class="text-left">Lorem ipsum dolor, sit amet consectetur
                                                            adipisicing elit. At dicta necessitatibus illo
                                                            consequuntur?</p>
                                                    </div>

                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Comment Modal end-->


                                    <!--Exam Modal Start-->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exam-Q-id">Quick
                                        Exam</button>

                                    <div class="modal fade bd-example-modal-lg" id="exam-Q-id" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">MCQ Exam and
                                                        SBA Exam
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <!-- content start -->
                                                    <div class="q_body">
                                                        <h5 class="card-title"><span>5</span>. Functions of
                                                            mitochondria are -
                                                            (MD-March
                                                            17)
                                                        </h5>

                                                        <form>
                                                            <div class="table-responsive">
                                                                <table class="table table-borderless">
                                                                    <tr>
                                                                        <td width="30" class="p-0 text-center">
                                                                            <input class="tf_ans_input" type="radio" name="a-e-q-id" id="t-a-e-q-id">
                                                                            <label class="tf_ans" for="t-a-e-q-id">T</label>
                                                                        </td>
                                                                        <td width="30" class="p-0 text-center">
                                                                            <input class="tf_ans_input" type="radio" name="a-e-q-id" id="f-a-e-q-id">
                                                                            <label class="tf_ans" for="f-a-e-q-id">F</label>
                                                                        </td>
                                                                        <td class="p-0 pl-md-2">
                                                                            <span>a)</span> Protein synthesis
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30" class="p-0 text-center">
                                                                            <input class="tf_ans_input" type="radio" name="b-e-q-id" id="t-b-e-q-id">
                                                                            <label class="tf_ans" for="t-b-e-q-id">T</label>
                                                                        </td>
                                                                        <td width="30" class="p-0 text-center">
                                                                            <input class="tf_ans_input" type="radio" name="b-e-q-id" id="f-b-e-q-id">
                                                                            <label class="tf_ans" for="f-b-e-q-id">F</label>
                                                                        </td>
                                                                        <td class="p-0 pl-md-2">
                                                                            <span>b)</span> Intracellular transport
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30" class="p-0 text-center">
                                                                            <input class="tf_ans_input" type="radio" name="c-e-q-id" id="t-c-e-q-id">
                                                                            <label class="tf_ans" for="t-c-e-q-id">T</label>
                                                                        </td>
                                                                        <td width="30" class="p-0 text-center">
                                                                            <input class="tf_ans_input" type="radio" name="c-e-q-id" id="f-c-e-q-id">
                                                                            <label class="tf_ans" for="f-c-e-q-id">F</label>
                                                                        </td>
                                                                        <td class="p-0 pl-md-2">
                                                                            <span>c)</span> Energy generation
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30" class="p-0 text-center">
                                                                            <input class="tf_ans_input" type="radio" name="d-e-q-id" id="t-d-e-q-id">
                                                                            <label class="tf_ans" for="t-d-e-q-id">T</label>
                                                                        </td>
                                                                        <td width="30" class="p-0 text-center">
                                                                            <input class="tf_ans_input" type="radio" name="d-e-q-id" id="f-d-e-q-id">
                                                                            <label class="tf_ans" for="f-d-e-q-id">F</label>
                                                                        </td>
                                                                        <td class="p-0 pl-md-2">
                                                                            <span>d)</span> Apoptosis
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30" class="p-0 text-center">
                                                                            <input class="tf_ans_input" type="radio" name="e-e-q-id" id="t-e-e-q-id">
                                                                            <label class="tf_ans" for="t-e-e-q-id">T</label>
                                                                        </td>
                                                                        <td width="30" class="p-0 text-center">
                                                                            <input class="tf_ans_input" type="radio" name="e-e-q-id" id="f-e-e-q-id">
                                                                            <label class="tf_ans" for="f-e-e-q-id">F</label>
                                                                        </td>
                                                                        <td class="p-0 pl-md-2">
                                                                            <span>e)</span> Cellular catabolism
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- content end -->

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Exam Modal end-->

                                    <!-- Video Lecture start-->
                                    <button type="button" class="btn btn-primary venobox" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/embed/IbZcKSG6T4c">Video</button>
                                    <!--Video Lecture end-->

                                    @endforeach
                                </div>
                            </div>
                            <!-- Q card end -->
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
    </section>

    <!-- Book Part End -->




    <?php include 'footer.php';?>

    <?php include 'js-link.php';?>

</body>

</html>
