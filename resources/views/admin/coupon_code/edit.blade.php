@extends('admin.layouts.app')

@section('content')

    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i><a href="{{ url('/admin') }}">Home</a><i class="fa fa-angle-right"></i>
            </li>
            <li>Book Edit</li>
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
                        <i class="fa fa-reorder"></i>Book Edit
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                        {!! Form::open(['action'=>['Admin\CouponcodeController@update',$coupon_code->id],'method'=>'PUT','files'=>true,'class'=>'form-horizontal']) !!}
                        <div class="form-body">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Coupon Code</label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <input type="text" name="book_name" value="{{ $coupon_code->coupon_code }}" required value="{{ old('coupon_code') }}" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Book Id</label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <input type="number" value="{{ $coupon_code->book_id }}" name="price" required value="{{ old('book_id') }}" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Coupon Price</label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <input type="number" name="coupon_price" value="{{ $book->coupon_price }}" required value="{{ old('coupon_price') }}" class="form-control">
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-md-3 control-label">Select Status</label>
                                <div class="col-md-4">
                                    {!! Form::select('status', ['1' => 'Active','0' => 'InActive'], $book->status,['class'=>'form-control']) !!}<i></i>
                                </div>
                            </div>


                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <a href="{{ url('admin/book') }}" class="btn btn-default">Cancel</a>
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