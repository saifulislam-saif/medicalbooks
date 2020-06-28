@extends('admin.layouts.app')

@section('content')

    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i><a href="{{ url('/admin') }}">Home</a><i class="fa fa-angle-right"></i>
            </li>
            <li>Subject Edit</li>
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
                        <i class="fa fa-reorder"></i>Subject Edit
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                        {!! Form::open(['action'=>['Admin\SubjectsController@update',$subject->id],'method'=>'PUT','files'=>true,'class'=>'form-horizontal']) !!}
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Subject</label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <input type="text" name="subject_name" required value="{{ $subject->subject_name }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Book</label>
                                <div class="col-md-4">
                                    @php  $books->prepend('Select Book', ''); @endphp
                                    {!! Form::select('book_id',$books, $subject->book_id,['class'=>'form-control','required'=>'required']) !!}<i></i>
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <label class="col-md-3 control-label">Price</label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <input type="number" value="{{ $subject->price }}" name="price" required value="{{ old('price') }}" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Coupon Price</label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <input type="number" name="coupon_price" value="{{ $subject->coupon_price }}" required value="{{ old('coupon_price') }}" class="form-control">
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-md-3 control-label">Select Status</label>
                                <div class="col-md-4">
                                    {!! Form::select('status', ['1' => 'Active','0' => 'InActive'], $subject->status,['class'=>'form-control']) !!}<i></i>
                                </div>
                            </div> -->


                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <a href="{{ url('admin/subject') }}" class="btn btn-default">Cancel</a>
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