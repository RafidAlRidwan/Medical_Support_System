
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="MediaCenter, Template, eCommerce">
        <meta name="robots" content="all">

        <title>Medical Support System</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css')}}">
        
        <!-- Customizable CSS -->
        <link rel="stylesheet" href="{{ asset('user/assets/css/main.css')}}">
        <link rel="stylesheet" href="{{ asset('user/assets/css/blue.css')}}">
        <link rel="stylesheet" href="{ asset('user/assets/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{ asset('user/assets/css/owl.transitions.css')}}">
        <!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
        <link href="{{ asset('user/aassets/css/lightbox.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('user/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{ asset('user/assets/css/animate.min.css')}}assets/css/rateit.css">
        <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap-select.min.css')}}">

        <!-- Demo Purpose Only. Should be removed in production -->
        <link rel="stylesheet" href="{{ asset('user/assets/css/config.css')}}">

        <link href="{{ asset('user/assets/css/green.css')}}" rel="alternate stylesheet" title="Green color">

        <link href="{{ asset('user/assets/css/blue.css')}}" rel="alternate stylesheet" title="Blue color">

        <link href="{{ asset('user/assets/css/red.css')}}" rel="alternate stylesheet" title="Red color">

        <link href="{{ asset('user/assets/css/orange.css')}}" rel="alternate stylesheet" title="Orange color">

        <link href="{{ asset('user/assets/css/dark-green.css')}}" rel="alternate stylesheet" title="Darkgreen color">

        <link rel="stylesheet" href="{{ asset('user/assets/css/font-awesome.min.css')}}">

        <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('faviconn.png')}}">

    </head>
    <body class="cnt-home">
    
        
    
        <!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
    @include('includes.top-header1')
    
    @include('includes.menu-bar')
</header>

<!-- ============================================== HEADER : END ============================================== -->

        @yield('content')
        
            

           
        

@include('includes.footerr')

  
    <script src="{{ asset('user/assets/js/jquery-1.11.1.min.js')}}"></script>
    
    <script src="{{ asset('user/assets/js/bootstrap.min.js')}}"></script>
    
    <script src="{{ asset('user/assets/js/bootstrap-hover-dropdown.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/owl.carousel.min.js')}}"></script>
    
    <script src="{{ asset('user/assets/js/echo.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/jquery.easing-1.3.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/bootstrap-slider.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/jquery.rateit.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('user/assets/js/lightbox.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('user/assets/js/scripts.js')}}"></script>

    <!-- For demo purposes – can be removed on production -->
    
    
    <!-- For demo purposes – can be removed on production : End -->

    

</body>
</html>