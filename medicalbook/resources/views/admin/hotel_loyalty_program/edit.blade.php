@extends('admin.layouts.app')

@section('content')

    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i><a href="{{ url('/admin') }}">Home</a><i class="fa fa-angle-right"></i>
            </li>
            <li>Hotel Loyalty Program Edit</li>
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
                        <i class="fa fa-reorder"></i>Hotel Loyalty Program Edit
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                        {!! Form::open(['action'=>['Admin\HotelLoyaltyProgramController@update',$hotel_loyalty_program->id],'method'=>'PUT','files'=>true,'class'=>'form-horizontal']) !!}
                        <div class="form-body">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Name</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <input type="text" name="hlp_name" value="{{ $hotel_loyalty_program->hlp_name }}" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Image</label>
                                <div class="col-md-4">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 200px;">
                                            <img src="@if($hotel_loyalty_program->hlp_photo) {{  Storage::disk('s3')->temporaryUrl($hotel_loyalty_program->hlp_photo, \Carbon\Carbon::now()->addMinutes(10))  }} @else  {{ 'http://placehold.it/200x200' }} @endif" width="100%" alt="...">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 200px;"></div>
                                        <div>
                                        <span class="btn btn-default btn-file"><span class="fileinput-new">Change image</span><span class="fileinput-exists">Change</span>
                                            <input name="hlp_photo" accept="image/*" type="file" >
                                        </span>
                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Priority</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <input type="number" name="priority" min="0" max="100" required value="{{ $hotel_loyalty_program->priority }}" class="form-control">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-info">Update</button>
                                    <a href="{{ url('admin/hotel-loyalty-program') }}" class="btn btn-default">Cancel</a>
                                </div>
                            </div>
                        </div>
                       {!! Form::close() !!}
                    <!-- END FORM-->
                </div>
            </div>

        </div>
    </div>



@endsection

@section('js')

    <script src="{{ asset('assets/scripts/jasny-bootstrap.min.js') }}"></script>

    <script type="text/javascript">
        // DO NOT REMOVE : GLOBAL FUNCTIONS!
        $(document).ready(function() {

                $('.select2').select2();

        })
    </script>




@endsection