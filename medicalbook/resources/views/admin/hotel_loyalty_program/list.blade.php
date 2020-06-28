@extends('admin.layouts.app')

@section('content')

    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i><a href="{{ url('/') }}">Home</a><i class="fa fa-angle-right"></i>
            </li>
            <li>Hotel Loyalty Program List</li>
        </ul>
    </div>

    @if(Session::has('message'))
        <div class="alert alert-success" role="alert">
            <p> {{ Session::get('message') }}</p>
        </div>
    @endif


    <div class="row">
        <div class="col-md-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>Hotel Loyalty Program List
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover datatable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Priority</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($hotel_loyalty_program as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->hlp_name }}</td>
                                <td><img height="40" src="{{ Storage::disk('s3')->temporaryUrl($row->hlp_photo, \Carbon\Carbon::now()->addMinutes(10)) }}"></td>
                                <td>{{ $row->priority }}</td>
                                <td>
                                    @can('Hotel Loyalty Program Edit')
                                    <a href="{{ url('admin/hotel-loyalty-program/'.$row->id.'/edit') }}" class="btn btn-xs btn-primary">Edit</a>
                                    @endcan
                                    @can('Hotel Loyalty Program Edit')
                                    {!! Form::open(array('route' => array('hotel-loyalty-program.destroy', $row->id), 'method' => 'delete','style' => 'display:inline')) !!}
                                    <button onclick="return confirm('Are You Sure ?')" class='btn btn-xs btn-danger' type="submit">Delete</button>
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script type="text/javascript">
        // DO NOT REMOVE : GLOBAL FUNCTIONS!
        $(document).ready(function() {
            $('.datatable').DataTable({
                responsive: true,
                "columnDefs": [
                    { "searchable": false, "targets": 4 },
                    { "orderable": false, "targets": 4 }
                ]
            })
        })
    </script>




@endsection