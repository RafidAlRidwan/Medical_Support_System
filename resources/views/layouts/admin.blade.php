
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

        <link rel="shortcut icon" href="{{ asset('faviconn.png') }}" >

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
                            <i id="date" class="fa fa-clock-o"></i></i> <span class="badge badge-light"></span>
                        </a>
                        
                    </li>
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user"></i> {{Auth::user()->name}}<b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                          


                        <li>    <a class="dropdown-item" href="/test5/public/adminlogout"
                                       ">
                                        {{ __('Logout') }}
                                    </a></li>

                                    
                        </ul>
                        
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            
                            <li>
                                <a href="/test5/public/admin"><i class="fa fa-dashboard fa-fw"></i> <strong>Dashboard</strong></a>
                            </li>
                            

                            
                            <li>
                                <a href="{{'http://localhost/test5/public/admin/create'}}"><i class="fa arrow"></i><strong>Create User</strong> <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">

                                    
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>



                            <li>
                                <a href="{{'http://localhost/test5/public/admin/show'}}"><i class="fa arrow"></i><strong>Manage Users</strong> <span class="fa arrow"></span></a>
                            </li>


                            <li>
                                <a href="{{'http://localhost/test5/public/adminrequest'}}"><i class="fa arrow"></i><strong>Manage Request List</strong><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">

                                    
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>




                            <li>
                                <a href="{{'http://localhost/test5/public/admincategory/create'}}"><i class="fa arrow"></i><strong>Manage Category</strong><span class="fa arrow"></span></a>
                            </li>
                            <li>
                                <a href="{{'http://localhost/test5/public/adminitem/create'}}"><i class="fa arrow"></i><strong>Create Item</strong><span class="fa arrow"></span></a>
                            </li>
                            <li>
                                <a href="{{'http://localhost/test5/public/adminitem/show'}}"><i class="fa arrow"></i><strong>Manage Items</strong><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    
                                    
                                    
                                    
                                    
                                    
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>



                     


                     





                            <li>
                                <a href="/test5/public/admincategory/show"><i class="fa arrow"></i><strong>Generate Report</strong><span class="fa arrow"></span></a>
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
        <script src="{{asset('str/js/test.js')}}"></script>
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



























