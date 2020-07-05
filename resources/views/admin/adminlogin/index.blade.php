<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin | Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{asset('adminloginform/images/icons/faviconn.png')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('adminloginform/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('adminloginform/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('adminloginform/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('adminloginform/vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('adminloginform/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('adminloginform/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('adminloginform/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('adminloginform/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('adminloginform/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('adminloginform/css/main.css')}}">
<!--===============================================================================================-->
     
</head>
<body>
     <form method="POST" action="{{ route('admin.login.submit') }}">
                        {{csrf_field()}}
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-90 p-b-30">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-40">
                        Medical Support System <br> <h5>Admin | Login</h5> 
                    </span>

                   

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email: ex@abc.xyz">

                        <input id="email" class="input100" type="email" name="email" value="{{ old('email') }}" placeholder="Email"  required autocomplete="email" autofocus>
                        <span class="focus-input100"></span>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
                        <span class="btn-show-pass">
                            <i class="fa fa fa-eye"></i>
                        </span>
                        

                        <input id="password" class="input100" type="password" value="{{ old('password') }}" name="password" placeholder="Password" required autocomplete="current-password">
                        <span class="focus-input100"></span>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                    </div>

                    <div class="container-login100-form-btn">

                        <button type="submit" value="submit" class="login100-form-btn">
                            {{ __('Login') }}
                        </button>

                    </div>
                    
                    </form>
                    
                    <div class="flex-col-c p-t-224">
                        <span class="txt2 p-b-10">
                            © 2020 | Medical Support System 
                        </span>

                        <span class="txt3 bo1 hov1">
                             All rights reserved
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
<!--===============================================================================================-->
    <script src="{{asset('adminloginform/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('adminloginform/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('adminloginform/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('adminloginform/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('adminloginform/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('adminloginform/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('adminloginform/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('adminloginform/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('adminloginform/js/main.js')}}"></script>

</body>
</html>