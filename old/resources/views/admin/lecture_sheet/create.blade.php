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
                Chapter Create
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
                        <i class="fa fa-reorder"></i>Chapter Create
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    {!! Form::open(['action'=>['Admin\LectureSheetController@store'],'files'=>true,'class'=>'form-horizontal']) !!}
                    <div class="form-body">

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Lecture Chapter</label>
                            <div class="col-md-4">
                                @php  $lecture_chapter->prepend('Select Chapter', ''); @endphp
                                {!! Form::select('ls_chapter_id',$lecture_chapter, old('ls_chapter_id'),['class'=>'form-control','required'=>'required']) !!}<i></i>
                            </div>
                        </div>

                        <div class="topic">

                        </div>



                        <div class="form-group">
                            <label class="col-md-3 control-label">Title</label>
                            <div class="col-md-4">
                                <div class="input-icon right">
                                    <input type="text" name="lecture_title" required value="{{ old('lecture_title') }}" class="form-control">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 control-label">Details</label>
                            <div class="col-md-4">
                                <div class="input-icon right">
                                    <textarea type="number" name="lecture_detail" rows="9" required  class="form-control">{{ old('lecture_detail') }}</textarea>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="{{ url('admin/lecture-sheet') }}" class="btn btn-default">Cancel</a>
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

            $("body").on( "change", "[name='ls_chapter_id']", function() {
                var ls_chapter_id = $(this).val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/admin/lschapter-topic',
                    dataType: 'HTML',
                    data: {ls_chapter_id: ls_chapter_id},
                    success: function( data ) {
                        $('.topic').html(data);
                    }
                });
            })



            $('.select2').select2();
        })
    </script>


@endsection