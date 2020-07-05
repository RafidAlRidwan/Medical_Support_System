
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin Dashboard</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Font Awesome CSS -->
        <link href="{{asset('str/css/all.css')}}" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('str/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{asset('str/css/metisMenu.min.css')}}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{asset('str/css/timeline.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{asset('str/css/startmin.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{asset('str/css/morris.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{asset('str/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- DataTables CSS -->
        <link href="{{asset('str/css/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="{{asset('str/css/dataTables/dataTables.responsive.css')}}" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

<body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{'http://localhost/test5/public/admin'}}">Medical Support System</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            
                            
                            
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </ul>
                        
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href=""><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            

                            <li>
                                <a href="{{"http://localhost/test5/public/admincreate/create"}}"><i class="fa arrow"></i>Admin<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">

                                    
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="{{"http://localhost/test5/public/admin/create"}}"><i class="fa arrow"></i> Add User<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">

                                    
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>



                            <li>
                                <a href="{{'http://localhost/test5/public/admin/show'}}"><i class="fa arrow"></i> Manage User<span class="fa arrow"></span></a>
                            </li>


                            <li>
                                <a href="{{"http://localhost/test5/public/admin"}}"><i class="fa arrow"></i> Request Manage<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">

                                    
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>




                            <li>
                                <a href="{{'http://localhost/test5/public/admincategory/create'}}"><i class="fa arrow"></i> Manage Catagory<span class="fa arrow"></span></a>
                            </li>
                            <li>
                                <a href="{{'http://localhost/test5/public/adminitem/create'}}"><i class="fa arrow"></i> Add Item<span class="fa arrow"></span></a>
                            </li>
                            <li>
                                <a href="{{'http://localhost/test5/public/adminitem/show'}}"><i class="fa arrow"></i> Manage Item<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    
                                    
                                    
                                    
                                    
                                    
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>



                     


                     





                            <li>
                                <a href="#"><i class="fa arrow"></i>Generate Report<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    
                                    
                                    
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                    <li>
                                  <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>  
                                        
                                
                                <ul class="nav nav-second-level">
                                    
                                    
                                    
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            
                            
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            


                           @yield('content')

                            



                             








                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{asset('str/js/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('str/js/bootstrap.min.js')}}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{asset('str/js/metisMenu.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{asset('str/js/raphael.min.js')}}"></script>
        <script src="{{asset('str/js/morris.min.js')}}"></script>
        <script src="{{asset('str/js/morris-data.js')}}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{asset('str/js/startmin.js')}}"></script>
        <!-- DataTables JavaScript -->
        <script src="{{asset('str/js/dataTables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('str/js/dataTables/dataTables.bootstrap.min.js')}}"></script>

    <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
    </body>
</html>



























