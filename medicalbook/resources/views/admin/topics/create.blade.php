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
                Topic Create
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
                        <i class="fa fa-reorder"></i>Topic Create
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    {!! Form::open(['action'=>['Admin\TopicsController@store'],'files'=>true,'class'=>'form-horizontal']) !!}
                    <div class="form-body">

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


                        <div class="form-group">
                            <label class="col-md-3 control-label">Topic</label>
                            <div class="col-md-4">
                                <div class="input-icon right">
                                    <input type="text" name="topic_name" required value="{{ old('topic_name') }}" class="form-control">
                                </div>
                            </div>
                        </div>






                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="{{ url('admin/topic') }}" class="btn btn-default">Cancel</a>
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


            $('.select2').select2();
        })
    </script>


@endsection