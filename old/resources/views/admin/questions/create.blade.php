@extends('admin.layouts.app')

@section('content')


    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{{ url('/') }}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                Question Create
            </li>
        </ul>

    </div>

    @if(Session::has('message'))
        <div class="alert {{ (Session::get('class'))?Session::get('class'):'alert-success' }}" role="alert">
            <p> {{ Session::get('message') }}</p>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-reorder"></i>Question Create 
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    {!! Form::open(['action'=>['Admin\QuestionsController@store'],'files'=>true,'class'=>'form-horizontal']) !!}
                    <div class="form-body">

                        @if($prev_create == 'no')

                        <div class="form-group">
                            <label class="col-md-3 control-label">Book</label>
                            <div class="col-md-4">
                                @php  $books->prepend('Select Book', ''); @endphp
                                {!! Form::select('book_id',$books, old('book_id'),['class'=>'form-control','required'=>'required']) !!}<i></i>
                            </div>
                        </div>

                        <div class="subject">

                        </div>

                        <div class="chapter">

                        </div>

                        <div class="topic">

                        </div>
                        @else
                            <div class="form-group">
                                <label class="col-md-3 control-label">Book</label>
                                <div class="col-md-4">
                                    @php  $books->prepend('Select Book', ''); @endphp
                                    {!! Form::select('book_id',$books, session('book_id'),['class'=>'form-control','required'=>'required']) !!}<i></i>
                                </div>
                            </div>

                            <div class="subject">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Subject</label>
                                    <div class="col-md-4">
                                        @php  $subjects->prepend('Select Subject', ''); @endphp
                                        {!! Form::select('subject_id',$subjects, session('subject_id'),['class'=>'form-control','required'=>'required']) !!}<i></i>
                                    </div>
                                </div>
                            </div>

                            <div class="chapter">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Chapter</label>
                                    <div class="col-md-4">
                                        @php  $chapters->prepend('Select Chapter', ''); @endphp
                                        {!! Form::select('chapter_id',$chapters, session('chapter_id'),['class'=>'form-control','required'=>'required']) !!}<i></i>
                                    </div>
                                </div>
                            </div>

                            <div class="topic">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Topic</label>
                                    <div class="col-md-4">
                                        @php  $topics->prepend('Select Topic', ''); @endphp
                                        {!! Form::select('topic_id',$topics, session('topic_id'),['class'=>'form-control','required'=>'required']) !!}<i></i>
                                    </div>
                                </div>    
                            </div>

                        @endif


                        <div class="form-group">
                            <label class="col-md-2 control-label">Question</label>
                            <div class="col-md-5">
                                <div class="input-icon right">
                                    <textarea type="text" placeholder="01. Inhibition of Na+, K+-ATPase would result in increased  (MD, MS, Basic, Paedi March-2019, 18)
a) Intracellular K+ concentration
b) Intracellular Ca++ concentration
c) Intracellular Na+ concentration
d) Na+-glucose cotransport
e) Na+-Ca++ counter transport
FTTFF" name="question_title" required rows="9" class="form-control">{{ old('question_title') }}</textarea>
                                </div>
                            </div>
                        </div>


                    


                        <!-- <div class="form-group">
                            <label class="col-md-2 control-label">MCQ Answer (A) (<i class="fa fa-asterisk ipd-star" style="font-size:11px;"></i>) </label>
                            <div class="col-md-5">
                                <div class="input-icon right">
                                    <input type="text" name="question_a" required value="{{ old('question_a') }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <label class="radio-inline"><input type="radio" name="answer_a" value="T" {{  old('answer_a') === "T" ? "required" : 'required' }} > T </label>
                                <label class="radio-inline"><input type="radio" name="answer_a" value="F" {{  old('answer_a') === "F" ? "required" : 'required' }} > F </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">MCQ Answer (B) (<i class="fa fa-asterisk ipd-star" style="font-size:11px;"></i>) </label>
                            <div class="col-md-5">
                                <div class="input-icon right">
                                    <input type="text" name="question_b" required value="{{ old('question_b') }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <label class="radio-inline"><input type="radio" name="answer_b" value="T" {{  old('answer_b') === "T" ? "required" : 'required' }} > T </label>
                                <label class="radio-inline"><input type="radio" name="answer_b" value="F" {{  old('answer_b') === "F" ? "required" : 'required' }} > F </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">MCQ Answer (C) (<i class="fa fa-asterisk ipd-star" style="font-size:11px;"></i>) </label>
                            <div class="col-md-5">
                                <div class="input-icon right">
                                    <input type="text" name="question_c" required value="{{ old('question_c') }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <label class="radio-inline"><input type="radio" name="answer_c" value="T" {{  old('answer_c') === "T" ? "required" : 'required' }} > T </label>
                                <label class="radio-inline"><input type="radio" name="answer_c" value="F" {{  old('answer_c') === "F" ? "required" : 'required' }} > F </label>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-md-2 control-label">MCQ Answer (D) (<i class="fa fa-asterisk ipd-star" style="font-size:11px;"></i>) </label>
                            <div class="col-md-5">
                                <div class="input-icon right">
                                    <input type="text" name="question_d" required value="{{ old('question_d') }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <label class="radio-inline"><input type="radio" name="answer_d" value="T" {{  old('answer_d') === "T" ? "required" : 'required' }} > T </label>
                                <label class="radio-inline"><input type="radio" name="answer_d" value="F" {{  old('answer_d') === "F" ? "required" : 'required' }} > F </label>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-md-2 control-label">MCQ Answer (E) (<i class="fa fa-asterisk ipd-star" style="font-size:11px;"></i>) </label>
                            <div class="col-md-5">
                                <div class="input-icon right">
                                    <input type="text" name="question_e" required value="{{ old('question_e') }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <label class="radio-inline"><input type="radio" name="answer_e" value="T" {{  old('answer_e') === "T" ? "required" : 'required' }} > T </label>
                                <label class="radio-inline"><input type="radio" name="answer_e" value="F" {{  old('answer_e') === "F" ? "required" : 'required' }} > F </label>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <label class="col-md-2 control-label">Discussion</label>
                            <div class="col-md-6">
                                <div class="input-icon right">
                                    <textarea name="discussion" class="form-control">{{ old('discussion') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Reference</label>
                            <div class="col-md-6">
                                <div class="input-icon right">
                                    <textarea name="reference" class="form-control">{{ old('reference') }}</textarea>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="{{ url('admin/question') }}" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
                <!-- END FORM-->
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->



        </div>
    </div>









    <!-- END PAGE CONTENT-->


@endsection

@section('js')

    <script type="text/javascript">
        $(document).ready(function() {

            $("body").on( "change", "[name='book_id']", function() {
                var book_id = $(this).val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/admin/book-subject',
                    dataType: 'HTML',
                    data: {book_id: book_id},
                    success: function( data ) {
                        $('.subject').html(data);
                    }
                });
            })

            $("body").on( "change", "[name='subject_id']", function() {
                var subject_id = $(this).val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/admin/subject-chapter',
                    dataType: 'HTML',
                    data: {subject_id: subject_id},
                    success: function( data ) {
                        $('.chapter').html(data);
                    }
                });
            })
            $("body").on( "change", "[name='chapter_id']", function() {
                var chapter_id = $(this).val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/admin/chapter-topic',
                    dataType: 'HTML',
                    data: {chapter_id: chapter_id},
                    success: function( data ) {
                        $('.topic').html(data);
                    }
                });
            })



            $('.select2').select2();
        })
    </script>


@endsection
