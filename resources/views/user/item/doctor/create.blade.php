@extends('Layouts.user')

@section('content')

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="home.html">Home</a></li>
                <li class='active'>Authentication</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
    <div class="container">
        <div class="sign-in-page inner-bottom-sm">
            <div class="row">
                <!-- Sign-in -->            
<div class="col-md-6 col-sm-6 sign-in">
    <h4 class="">sign in</h4>
    <p class="">Hello, Welcome to your account.</p> <br>
    <form class="register-form outer-top-xs" method="POST" action="{{ route('login') }}">
                        {{csrf_field()}}
    <span style="color:red;" >


    </span>
        <div class="form-group" data-validate="Please enter email: ex@abc.xyz">
            <label class="info-title" for="email">Email Address <span>*</span></label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus class="form-control unicase-form-control text-input">
        </div>
        <div class="form-group">
            <label class="info-title" for="password">Password <span>*</span></label>
         <input id="password" type="password" name="password" value="{{ old('password') }}" class="form-control unicase-form-control text-input" placeholder="Password" required autocomplete="current-password" >
        </div>
        
        <button type="submit" class="btn-upper btn btn-primary checkout-page-button" value="submit">{{ __('Login') }} </button>
    </form>                 
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
    <h4 class="checkout-subtitle">create a new account</h4>
    <p class="text title-tag-line">Create your own account.</p>



    <form class="register-form outer-top-xs"  method="post" action="/test5/public/medical">
      {{csrf_field()}}
        <div class="form-group">
            <label class="info-title" for="name">Full Name <span>*</span></label>
            <input type="text" class="form-control unicase-form-control text-input" id="name" name="name" required="required">
        </div>
        <div class="form-group">

        </div>


        <div class="form-group">
            <label class="info-title" for="email">Email Address <span>*</span></label>
            <input type="email" class="form-control unicase-form-control text-input" id="email" name="email" required placeholder="please enter a valid email address" >
                   <span id="user-availability-status1" style="font-size:12px;"></span>
        </div>

<div class="form-group">
            <label class="info-title" for="contact_no">Contact No. <span>*</span></label>
            <input type="text" class="form-control unicase-form-control text-input" id="contact_no" placeholder="+8801xxxxxxxxx" name="contact_no" maxlength="20" required >
        </div>

 <div class="form-group">
            <label class="info-title" for="address">Address <span>*</span></label>
            <textarea type="address" class="form-control unicase-form-control text-input" id="address" placeholder="" name="address"  required > </textarea>
        </div>


        <div class="form-group">
                            <label for="password" class="info-title">{{ __('Password') }} <span>*</span></label>

                                <input id="password" type="password" class="form-control unicase-form-control text-input" name="password" required autocomplete="new-password">

                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="info-title">{{ __('Confirm Password') }}<span>*</span></label>

                                <input id="password-confirm" type="password" class="form-control unicase-form-control text-input" name="password_confirmation" required autocomplete="new-password">
                        
                        </div>



        <button type="submit" value="submit" name="submit" class="btn-upper btn btn-primary checkout-page-button" >Sign Up</button>
        
    </form>


    
    <span class="checkout-subtitle outer-top-xs">Thanks for Registration</span>
    <div class="checkbox">
      
    </div>
</div>  
</div>
</div>



<br>

         @if(count($errors) > 0)
                <div class="col-lg-4">
                  <div class="panel panel-danger">
                    <div class="panel-heading">Errors
                   </div>
                      <div class="panel-body">
                        <ul>
                          @foreach($errors->all() as $error)
                                 <li> {{$error}}</li>
                          @endforeach
                        </ul>
                      </div>
                          <div class="panel-footer">
                                    
                          </div>
                    </div>
                  </div>

          @endif





@endsection