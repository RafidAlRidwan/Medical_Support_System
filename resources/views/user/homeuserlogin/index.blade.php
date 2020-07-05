@extends('Layouts.user')

@section('content')
@include('includes.flash-message')
<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="furniture-container homepage-container">
        <div class="row">
        
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                
    @include('includes.side-menu')

            </div>   
            
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                
            
<div id="hero" class="homepage-slider3">
    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
        <div class="full-width-slider"> 
            <div class="item" style="background-image: url({{asset('user/assets/images/sliders/pic1.jpg')}});">
                
            </div>
        </div>
        
        

    </div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection