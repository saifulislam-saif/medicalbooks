@extends('admin.layouts.app')

@section('content')

    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i><a href="{{ url('/admin') }}">Home</a><i class="fa fa-angle-right"></i>
            </li>
            <li>Administrator Edit</li>
        </ul>
    </div>



    <div class="row">
        <div class="col-md-12">
            <div class="portlet">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-reorder"></i>Administrator Edit
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                        {!! Form::open(['action'=>['Admin\AdministratorController@update',$user->id],'method'=>'PUT','files'=>true,'class'=>'form-horizontal']) !!}
                        <div class="form-body">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Email Address</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email Address">
                                    </div>
                                </div>
                            </div>

 

                            <div class="form-group">
                                <label class="col-md-3 control-label">Phone Number</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="text" name="phone_number" value="{{ $user->phone_number }}" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Select Status</label>
                                <div class="col-md-4">
                                    {!! Form::select('status', ['1' => 'Active','0' => 'InActive'], $user->status ,['class'=>'form-control']) !!}<i></i>
                                </div>
                            </div>

                            <div class="form-group">

                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Password</label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <input type="password" name="password" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <a href="{{ url('admin/administrator') }}" class="btn btn-default">Cancel</a>
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

    <script type="text/javascript">
        // DO NOT REMOVE : GLOBAL FUNCTIONS!
        $(document).ready(function() {

                $('.select2').select2();

        })
    </script>




@endsection