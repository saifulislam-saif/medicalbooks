@extends('admin.layouts.app')

@section('content')

    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i><a href="{{ url('/') }}">Home</a><i class="fa fa-angle-right"></i>
            </li>
            <li>Question List</li>
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
                        <i class="fa fa-globe"></i>MCQ Question List
                        <a href="{{ action('Admin\QuestionsController@create') }}"> <i class="fa fa-plus"></i> </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover datatable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Question</th>
                            <th>Topic</th>
                            <th>Chapter</th>
                            <th>Subject</th>
                            <th>Book</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($questions as $question)
                            <tr>
                                <td>{{ $question->id }}</td>
                                <td>{{ $question->question_title }}</td>
                                <td>{{ (isset($question->topic->topic_name))?$question->topic->topic_name:'' }}</td>
                                <td>{{ $question->chapter->chapter_name }}</td>
                                <td>{{ $question->subject->subject_name }}</td>
                                <td>{{ (isset($question->book->book_name))?$question->book->book_name:'' }}</td>
                                <td>
                                    <a href="{{ url('admin/question/'.$question->id.'/edit') }}" class="btn btn-xs btn-primary">Edit</a>
                                    {!! Form::open(array('route' => array('question.destroy', $question->id), 'method' => 'delete','style' => 'display:inline')) !!}
                                    <!-- <button onclick="return confirm('Are You Sure ?')" class='btn btn-xs btn-danger' type="submit">Delete</button> -->
                                    {!! Form::close() !!}
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
                    { "searchable": false, "targets": 5 },
                    { "orderable": false, "targets": 5 }
                ]
            })
        })
    </script>

@endsection