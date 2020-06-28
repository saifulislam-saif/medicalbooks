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
                        {!! Form::open(['action'=>['Admin\BooksController@update',$book->id],'method'=>'PUT','files'=>true,'class'=>'form-horizontal']) !!}
                        <div class="form-body">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Name</label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <input type="text" name="book_name" value="{{ $book->book_name }}" required value="{{ old('book_name') }}" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Price</label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <input type="number" value="{{ $book->price }}" name="price" required value="{{ old('price') }}" class="form-control">
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
                        <div class="col-md-3">
                            <div class="form-group">
                                <img id="holder_image" src="{{asset($book->image)}}" style="margin-top:15px;margin-bottom:5px;max-width:100%;">
                                @php $file_array = explode('/',$book->image); @endphp
                                
                                <div class="input-group">
                                    <tr>
                                        <th class="text-right">Image:</th>
                                        <button><input type="file" name="image" id="fileToUpload"></button>
                                    </tr>
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