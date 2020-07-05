@extends('Layouts.user')


@section('content')

<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="#">Home</a></li>
        <li class='active'>Profile</li>
      </ul>
    </div><!-- /.breadcrumb-inner -->
  </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
  <div class="container">
    <div class="checkout-box inner-bottom-sm">
      <div class="row">
        <div class="col-md-8">
          <div class="panel-group checkout-steps" id="accordion">
            <!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

  <!-- panel-heading -->
    <div class="panel-heading">
      <h4 class="unicase-checkout-title">
          <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
            <span><i class="fa fa-user" aria-hidden="true"></i></span>My Profile
          </a>
       </h4>
    </div>
    <!-- panel-heading -->

  <div id="collapseOne" class="panel-collapse collapse in">

    <!-- panel-body  -->
      <div class="panel-body">
      <div class="row">   
<h4>Personal info</h4>
        <div class="col-md-12 col-sm-12 already-registered-login">



          <form class="register-form" action="/test5/public/medical/{{$user->id}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PUT">
<div class="form-group">
              <label class="info-title" for="name">Name<span>*</span></label>
              <input type="text" class="form-control unicase-form-control text-input" value="{{$user->name}}" id="name" name="name" required="required">
            </div>



            <div class="form-group">
              <label class="info-title" for="email">Email Address <span>*</span></label>
       <input type="email" class="form-control unicase-form-control text-input" id="email" value="{{$user->email}}" readonly>
            </div>

            <div class="form-group">
              <label class="info-title" for="contact_no">Contact No. <span>*</span></label>
              <input type="text" class="form-control unicase-form-control text-input" id="contact_no" name="contact_no" required="required" value="{{$user->contact_no}}"  maxlength="15">
            </div>

            <div class="form-group">
              <label class="info-title" for="address">Address <span>*</span></label>
              <input type="text" class="form-control unicase-form-control text-input" id="address" name="address" required="required" value="{{$user->address}}">
            </div>

            <div class="form-group">
              <label class="info-title" for="password"> Password <span>*</span></label>
       <input type="password" class="form-control unicase-form-control text-input" id="password" name="password" value="{{$user->password}}">
            </div>

            <button type="submit" name="update" class="btn-upper btn btn-primary checkout-page-button">Update</button>
          </form>
          
        </div>  
        <!-- already-registered-login -->   

      </div>      
    </div>
    <!-- panel-body  -->

  </div><!-- row -->
</div>
<!-- checkout-step-01  -->
              <!-- checkout-step-02  -->
               




                  </div>
                </div>
              </div>
              <!-- checkout-step-02  -->
              
          </div><!-- /.checkout-steps -->
        </div>
        
     </div><!-- /.row -->
    </div><!-- /.checkout-box -->
  

</div>
</div>      


@endsection
