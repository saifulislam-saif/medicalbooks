<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8"/>
    <title>@php echo (isset($title))?$title:'Medical Books Online' @endphp</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <meta name="MobileOptimized" content="320">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>

    <link href="{{ asset('assets/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/select2/select2.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/bootstrap-datepicker/css/datepicker.css') }}"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="{{ asset('assets/css/sb-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style-conquer.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/style-responsive.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/themes/default.css') }}" rel="stylesheet" type="text/css" id="style_color"/>
    <link rel="stylesheet" href="{{ asset('assets/css/jasny-bootstrap.min.css') }}">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('skin/vendor/ratings/star-rating-svg.css') }}">

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar  navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{ url('admin') }}">
                <svg width="45px" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 620 621.89"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:none;stroke:#fff;stroke-miterlimit:10;stroke-width:16px;}</style></defs><title>temporeLogoWhite</title><path class="cls-1" d="M675,259.49A280.23,280.23,0,0,0,445.92,655L400,678l-45.92-23a277.15,277.15,0,0,0,25.37-116.61A280.15,280.15,0,0,0,125,259.49L400,122Z" transform="translate(-90 -88.98)"/><polygon class="cls-2" points="612 461.94 310 612.94 8 461.94 8 159.94 310 8.94 612 159.94 612 461.94"/></svg>
            </a>
        </div>



        <ul class="nav navbar-nav pull-right">


            <li class="devider">
                &nbsp;
            </li>
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class="dropdown user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <i class="fa fa-user"></i>
                    <span class="username">Admin </span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('admin/profile') }}"><i class="fa fa-user"></i> My Profile</a>
                    </li>

                    <li class="divider">
                    </li>
                    <li>
                        <a href="" title="Sign Out" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-key"></i> Log Out</a>
                        <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
        </ul>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="page-sidebar-menu">
                <li class="sidebar-toggler-wrapper">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler">
                    </div>
                    <div class="clearfix">
                    </div>
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                </li>

                <li class="start @php echo (Request::segment(2)=='' )?'active':'' @endphp">
                    <a href="{{ url('admin') }}">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>


                <li class="@php echo (Request::segment(2)=='administrator')?'active':''  @endphp">
                    <a href="javascript:;">
                        <i class="icon-users"></i><span class="title">Administrator</span><span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">

                        <li class="@php echo (Request::segment(2)=='administrator' && Request::segment(3)=='')?'active':''  @endphp">
                            <a href="{{ url('admin/administrator') }}">Administrator List</a>
                        </li>

                        <li class="@php echo (Request::segment(2)=='administrator' && Request::segment(3)=='create')?'active':''  @endphp">
                            <a href="{{ action('Admin\AdministratorController@create') }}">Add Administrator</a>
                        </li>

                    </ul>
                </li>


                <li class="@php echo (Request::segment(2)=='book'|| Request::segment(2)=='subscription')?'active':''  @endphp">
                    <a href="javascript:;">
                        <i class="fas fa-book"></i><span class="title">Books</span><span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="@php echo (Request::segment(2)=='book' && Request::segment(3)=='')?'active':''  @endphp">
                            <a href="{{url('admin/book')}}">Books List</a>
                        </li>
                        <li class="@php echo (Request::segment(2)=='book' && Request::segment(3)=='create')?'active':''  @endphp">
                            <a href="{{ action('Admin\BooksController@create') }}">Book Add</a>
                        </li>
                        <li class="@php echo (Request::segment(2)=='subscription' && Request::segment(3)=='subscription')?'active':''  @endphp">
                            <a href="{{url('admin/subscription')}}">Subscription</a>
                        </li>
                    </ul>
                </li>


                <li class="@php echo (Request::segment(2)=='subject')?'active':''  @endphp">
                    <a href="javascript:;">
                        <i class="fas fa-address-book"></i><span class="title">Subjects</span><span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="@php echo (Request::segment(2)=='subject' && Request::segment(3)=='')?'active':''  @endphp">
                            <a href="{{url('admin/subject')}}">Subjects List</a>
                        </li>
                        <li class="@php echo (Request::segment(2)=='subject' && Request::segment(3)=='create')?'active':''  @endphp">
                            <a href="{{ action('Admin\SubjectsController@create') }}">Subject Add</a>
                        </li>
                    </ul>
                </li>

                <li class="@php echo (Request::segment(2)=='chapter')?'active':''  @endphp">
                    <a href="javascript:;">
                        <i class="fas fa-book"></i><span class="title">Chapters</span><span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="@php echo (Request::segment(2)=='chapter' && Request::segment(3)=='')?'active':''  @endphp">
                            <a href="{{url('admin/chapter')}}">Chapters List</a>
                        </li>
                        <li class="@php echo (Request::segment(2)=='chapter' && Request::segment(3)=='create')?'active':''  @endphp">
                            <a href="{{ action('Admin\ChaptersController@create') }}">Chapter Add</a>
                        </li>
                    </ul>
                </li>

                <li class="@php echo (Request::segment(2)=='topic')?'active':''  @endphp">
                    <a href="javascript:;">
                        <i class="fas fa-book"></i><span class="title">Topics</span><span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="@php echo (Request::segment(2)=='topic' && Request::segment(3)=='')?'active':''  @endphp">
                            <a href="{{url('admin/topic')}}">Topics List</a>
                        </li>
                        <li class="@php echo (Request::segment(2)=='topic' && Request::segment(3)=='create')?'active':''  @endphp">
                            <a href="{{ action('Admin\TopicsController@create') }}">Topic Add</a>
                        </li>
                    </ul>
                </li>

                <li class="@php echo (Request::segment(2)=='coupon')?'active':''  @endphp">
                    <a href="javascript:;">
                        <i class="fas fa-book"></i><span class="title">Coupon</span><span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="@php echo (Request::segment(2)=='coupon' && Request::segment(3)=='')?'active':''  @endphp">
                            <a href="{{url('admin/coupon')}}">Coupon List</a>
                        </li>
                        <li class="@php echo (Request::segment(2)=='coupon' && Request::segment(3)=='create')?'active':''  @endphp">
                            <a href="{{ action('Admin\CouponcodeController@create') }}">Coupon Add</a>
                        </li>
                    </ul>
                </li>

                <li class="@php echo (Request::segment(2)=='lecture-sheet'||Request::segment(2)=='lecture-chapter'||Request::segment(2)=='lecture-topic')?'active':''  @endphp">
                    <a href="javascript:;">
                        <i class="fas fa-book"></i><span class="title">Lecture Sheet</span><span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="@php echo (Request::segment(2)=='lecture-chapter' && Request::segment(3)=='')?'active':''  @endphp">
                            <a href="{{url('admin/lecture-chapter')}}">Lecture Chapter</a>
                        </li>
                        <li class="@php echo (Request::segment(2)=='lecture-topic' && Request::segment(3)=='')?'active':''  @endphp">
                            <a href="{{url('admin/lecture-topic')}}">Lecture Topic</a>
                        </li>
                        <li class="@php echo (Request::segment(2)=='lecture-sheet' && Request::segment(3)=='')?'active':''  @endphp">
                            <a href="{{url('admin/lecture-sheet')}}">Lecture Sheet List</a>
                        </li>
                    </ul>
                </li>

                <li class="@php echo (Request::segment(2)=='question' || Request::segment(2)=='sba')?'active':''  @endphp">
                    <a href="javascript:;">
                        <i class="fas fa-question"></i><span class="title">Questions</span><span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="@php echo (Request::segment(2)=='question' && Request::segment(3)=='')?'active':''  @endphp">
                            <a href="{{url('admin/question')}}">MCQ Questions List</a>
                        </li>
                        <li class="@php echo (Request::segment(2)=='sba' && Request::segment(3)=='')?'active':''  @endphp">
                            <a href="{{url('admin/sba')}}">SBA Questions List</a>
                        </li>
                        
                    </ul>
                </li>



            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success">Save changes</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

              @yield('content')


        </div>

    </div>
<!-- END CONTENT -->
</div>


<div class="footer">
    <div class="footer-inner">
        {{ date('Y') }} &copy; Tempore.
    </div>
    <div class="footer-tools">
		<span class="go-top">
		<i class="fa fa-angle-up"></i>
		</span>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ asset('assets/plugins/jquery-1.11.0.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('assets/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>


<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}"></script>

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/scripts/app.js') }}"></script>


@yield('js')
<script>
    $(document).ready(function() {
        // initiate layout and plugins
        App.init();

    });
</script>

</body>
<!-- END BODY -->
</html>