@extends('admin.layouts.app')

@section('content')

                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="{{ url('admin') }}">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            User Notification Log List
                        </li>

                    </ul>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-globe"></i>User Notification Log List
                                </div>
                            </div>
                            <div class="portlet-body">
                                <table class="table table-striped table-bordered table-hover datatable">
                                    <thead>
                                    <tr>
                                        <th>Trip ID</th>
                                        <th>User Email</th>
                                        <th>Event</th>
                                        <th>Is Notify</th>
                                        <th>Notify Count</th>
                                        <th>First Time Notify</th>
                                        <th>Last Time Notify</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

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
                processing: true,
                serverSide: true,
                ajax: '/admin/user-notification-log-list',
                "pageLength": 25,
                columns: [
                    {data: 'id',name:'d1.id'},
                    {data: 'user_email',name: 'd3.email'},
                    {data: 'event_title',name: 'd2.event_title'},
                    {data: 'is_notified',name:'d1.is_notified'},
                    {data: 'notify_count',name:'d1.notify_count'},
                    {data: 'first_time_notify',name:'d1.first_time_notify'},
                    {data: 'last_time_notify',name:'d1.last_time_notify'},
                    {data: 'action'},
                ],
        })

        })
    </script>




@endsection