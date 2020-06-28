@extends('admin.layouts.app')

@section('content')

    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i><a href="{{ url('/admin') }}">Home</a><i class="fa fa-angle-right"></i>
            </li>
            <li>Question Edit</li>
        </ul>
    </div>

    @if(Session::has('message'))
        <div class="alert {{ (Session::get('class'))?Session::get('class'):'alert-success' }}" role="alert">
            <p> {{ Session::get('message') }}</p>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="portlet">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-reorder"></i>SBA Edit
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                        {!! Form::open(['action'=>['Admin\SBAController@update',$question->id],'method'=>'PUT','files'=>true,'class'=>'form-horizontal']) !!}
                        <div class="form-body">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Book</label>
                                <div class="col-md-4">
                                    @php  $books->prepend('Select Book', ''); @endphp
                                    {!! Form::select('book_id',$books, $question->book_id,['class'=>'form-control','required'=>'required']) !!}<i></i>
                                </div>
                            </div>

                            <div class="subject">

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Subject</label>
                                    <div class="col-md-4">
                                        @php  $subjects->prepend('Select Book', ''); @endphp
                                        {!! Form::select('subject_id',$subjects, $question->subject_id,['class'=>'form-control','required'=>'required']) !!}<i></i>
                                    </div>
                                </div>

                            </div>

                            <div class="chapter">

                                <div class="form-group">
                                    <label class="col-md-3 control-label">Chapter</label>
                                    <div class="col-md-4">
                                        @php  $chapters->prepend('Select Book', ''); @endphp
                                        {!! Form::select('chapter_id',$chapters, $question->chapter_id,['class'=>'form-control','required'=>'required']) !!}<i></i>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                    <label class="col-md-3 control-label">Topic</label>
                                    <div class="col-md-4">
                                        @php  $topics->prepend('Select Book', ''); @endphp
                                        {!! Form::select('topic_id',$topics, $question->topic_id,['class'=>'form-control','required'=>'required']) !!}<i></i>
                                    </div>
                                </div>

                            </div>


                            <div class="form-group">
                                <label class="col-md-3 control-label">Question</label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <input type="text" name="question_title" required value="{{ $question->question_title }}" class="form-control">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                            <label class="col-md-2 control-label">SBA Answer (A) (<i class="fa fa-asterisk ipd-star" style="font-size:11px;"></i>) </label>
                            <div class="col-md-6">
                                <div class="input-icon right">
                                    @php
                                        $qa = \App\Question_ans::select('id','answer', 'sl_no')->where('question_id',$question->id)->where('sl_no', 'A')->first();
                                        echo "<input class=form-control type='text' name='question_a' required value='".$qa->answer."'>";
                                        echo "<input type='hidden' name='qa_id' value='".$qa->id."'>";
                                    @endphp

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">SBA Answer (B) (<i class="fa fa-asterisk ipd-star" style="font-size:11px;"></i>) </label>
                            <div class="col-md-6">
                                <div class="input-icon right">
                                    @php
                                        $qb = \App\Question_ans::select('id','answer', 'sl_no')->where('question_id',$question->id)->where('sl_no', 'B')->first();
                                        echo "<input class=form-control type='text' name='question_b' required value='".$qb->answer."'>";
                                        echo "<input type='hidden' name='qb_id' value='".$qb->id."'>";
                                    @endphp
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">SBA Answer (C) (<i class="fa fa-asterisk ipd-star" style="font-size:11px;"></i>) </label>
                            <div class="col-md-6">
                                <div class="input-icon right">
                                    @php
                                        $qc = \App\Question_ans::select('id','answer', 'sl_no')->where('question_id',$question->id)->where('sl_no', 'C')->first();
                                        echo "<input class=form-control type='text' name='question_c' required value='".$qc->answer."'>";
                                        echo "<input type='hidden' name='qc_id' value='".$qc->id."'>";
                                    @endphp
                                </div>
                            </div>
                            
                        </div>
                         <div class="form-group">
                            <label class="col-md-2 control-label">SBA Answer (D) (<i class="fa fa-asterisk ipd-star" style="font-size:11px;"></i>) </label>
                            <div class="col-md-6">
                                <div class="input-icon right">
                                    @php
                                        $qd = \App\Question_ans::select('id','answer', 'sl_no')->where('question_id',$question->id)->where('sl_no', 'D')->first();
                                        echo "<input class=form-control type='text' name='question_d' required value='".$qd->answer."'>";
                                        echo "<input type='hidden' name='qd_id' value='".$qd->id."'>";
                                    @endphp
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">SBA Answer (E) (<i class="fa fa-asterisk ipd-star" style="font-size:11px;"></i>) </label>
                            <div class="col-md-6">
                                <div class="input-icon right">
                                    @php
                                        $qe = \App\Question_ans::select('id','answer', 'sl_no')->where('question_id',$question->id)->where('sl_no', 'E')->first();
                                        echo "<input class=form-control type='text' name='question_e' required value='".$qe->answer."'>";
                                        echo "<input type='hidden' name='qe_id' value='".$qe->id."'>";
                                    @endphp
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Correct Answer (<i class="fa fa-asterisk ipd-star" style="font-size:11px;"></i>) </label>
                            <div class="col-md-6">
                                @if ($question->correct_ans=='A') <label class='radio-inline'><input type='radio' name='correct_ans' value='A' checked > A </label>
                                @else <label class='radio-inline'><input type='radio' name='correct_ans' value='A' > A </label> @endif

                                @if ($question->correct_ans=='B') <label class='radio-inline'><input type='radio' name='correct_ans' value='B' checked > B </label>
                                @else <label class='radio-inline'><input type='radio' name='correct_ans' value='B' > B </label> @endif

                                @if ($question->correct_ans=='C') <label class='radio-inline'><input type='radio' name='correct_ans' value='C' checked > C </label>
                                @else <label class='radio-inline'><input type='radio' name='correct_ans' value='C' > C </label> @endif

                                @if ($question->correct_ans=='D') <label class='radio-inline'><input type='radio' name='correct_ans' value='D' checked > D </label>
                                @else <label class='radio-inline'><input type='radio' name='correct_ans' value='D' > D </label> @endif

                                @if ($question->correct_ans=='E') <label class='radio-inline'><input type='radio' name='correct_ans' value='E' checked > E </label>
                                @else <label class='radio-inline'><input type='radio' name='correct_ans' value='E' > E </label> @endif

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Discussion</label>
                            <div class="col-md-6">
                                <div class="input-icon right">
                                    <textarea name="discussion" class="form-control">{{ $question->discussion }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Reference</label>
                            <div class="col-md-6">
                                <div class="input-icon right">
                                    <textarea name="reference" class="form-control">{{ $question->reference }}</textarea>
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


            <div class="row">
                <div class="col-md-6">
                    <h3 style="margin-top: 0">Answers of this question</h3>
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{ url('admin/question-answer/create/'.$question->id) }}" class="btn btn-xs btn-primary">Travel Question Ans. Add</a>
                </div>

            </div>
            <br>

            <table class="table table-striped table-bordered table-hover datatable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>Answer Title</th>
                    <th>TF</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if($question->answers)
                @foreach($question->answers as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->question->question_title }}</td>
                        <td>{{ $row->answer_title }}</td>
                        <td>{{ $row->tf }}</td>
                        
                        

                        <td>

                            @can('Travel Question Answer Edit')
                                <a href="{{ url('admin/travel-question-answer/'.$row->id.'/edit') }}" class="btn btn-xs btn-primary">Edit</a>
                            @endcan
                            @can('Travel Question Answer Delete')
                                {!! Form::open(array('route' => array('travel-question-answer.destroy', $row->id), 'method' => 'delete','style' => 'display:inline')) !!}
                                <button onclick="return confirm('Are You Sure ?')" class='btn btn-xs btn-danger' type="submit">Delete</button>
                                {!! Form::close() !!}
                            @endcan


                        </td>
                    </tr>
                @endforeach
                @endif
                </tbody>
            </table>

        </div>
    </div>



@endsection

@section('js')

    <script type="text/javascript">
        // DO NOT REMOVE : GLOBAL FUNCTIONS!
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

                

                $('.select2').select2();

        })
    </script>




@endsection