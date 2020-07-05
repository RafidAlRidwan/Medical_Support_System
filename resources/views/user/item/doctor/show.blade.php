@extends('Layouts.user')


@section('content')





<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
 


      <ul class="list-inline list-unstyled">
        <li><a href="index.php">Home</a></li>
        <li>{{$it-> category -> category_name}}</li>
        <li>{{$it->item_name}}</li>
        
      </ul>
      
    </div>
  </div>
</div>
<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row single-product outer-bottom-sm '>
      <div class='col-md-3 sidebar'>
        <div class="sidebar-module-container">


          <!-- ==============================================CATEGORY============================================== -->
<div class="sidebar-widget outer-bottom-xs wow fadeInUp">
  <h3 class="section-title">Category</h3>
  <div class="sidebar-widget-body m-t-10">
    <div class="accordion">

                 
        <div class="accordion-group">
              <div class="accordion-heading">
                  <a href=" /test5/public/doctor "  class="accordion-toggle collapsed">Doctors</a>
                  <a href="/test5/public/ambulance  "  class="accordion-toggle collapsed">Ambulance</a>
                  <a href=" /test5/public/blood "  class="accordion-toggle collapsed">Blood</a>
              </div>
            
          </div>
           
      </div>
  </div>
</div>
  
        </div>
      </div>
 


      <div class='col-md-9'>
        <div class="row  wow fadeInUp">
               <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">

 <div class="single-product-gallery-item" id="slide1">
                <a data-lightbox="image-1" data-title=" ">
                    <img class="img-responsive" alt="" src="/test5/public/images/itemimages/{{$it -> photo_file}}"  width="370" height="350" />
                </a>
             </div>
           </div>
                 <div class="single-product-gallery-thumbs gallery-thumbs">

                  <div id="owl-single-product-thumbnails">
      
               </div>
            </div>

         </div>
      </div>          




          <div class='col-sm-6 col-md-7 product-info-block'>
            <div class="product-info">
              <h1 class="name"> {{$it -> item_name}} </h1>
 
              <div class="stock-container info-container m-t-10">
                <div class="row">
                  <div class="col-sm-3">
                   
                  </div>
                  <div class="col-sm-9">
                   
                  </div>
                </div>  
              </div>

<div class="stock-container info-container m-t-10">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="stock-box">
                      <span class="label">Pay after visiting the Doctor</span>
                    </div>  
                  </div>
                  <div class="col-sm-9">
                    <div class="stock-box">
                      
                    </div>  
                  </div>
                </div><!-- /.row -->  
              </div>





<div class="stock-container info-container m-t-10">
                <div class="row">
                  <div class="col-sm-3">
                     
                  </div>
                  <div class="col-sm-9">
                    <div class="stock-box">
                      <span class="value">  </span>
                    </div>  
                  </div>
                </div><!-- /.row -->  
              </div>

              <div class="price-container info-container m-t-20">
                <div class="row">
                  

                  <div class="col-sm-6">
                    <div class="price-box">
                      <span class="price">{{$it->price - 100}} + 100 Tk </span>
                      
                    </div>
                  </div>

                </div>
              </div>

  

                                    



              <div class="quantity-container info-container">
                <div class="row">
   
                  <div class="col-sm-7">
                    <a href="{{route('request.add' , $it->id)}} " class="btn btn-primary"> Request</a>
                  </div>

                  <div class="col-sm-6">
                    <div class="favorite-button m-t-10">
                      
                      

                    </div>
                  </div>
                                    
                                    
                </div>
              </div>
  
            </div>
          </div>
        </div>

        
        <div class="product-tabs inner-bottom-xs  wow fadeInUp">
          <div class="row">
            <div class="col-sm-3">
              <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                
              </ul><!-- /.nav-tabs #product-tabs -->
            </div>
            <div class="col-sm-9">

              <div class="tab-content">
                
                <div id="description" class="tab-pane in active">
                  <div class="product-tab">
                    <p class="text"> {!!$it->description!!} </p>
                  </div>  
                </div><!-- /.tab-pane -->

                <div id="review" class="tab-pane">
                  <div class="product-tab">
                                        
                    <div class="product-reviews">
                      <h4 class="title">Customer Reviews</h4>


                      
                      
                    </div><!-- /.product-reviews -->
                    <form role="form" class="cnt-form" name="review" method="post">

                    
                    <div class="product-add-review">
                      <h4 class="title"></h4>
                      
                      
                      <div class="review-form">
                        <div class="form-container">
                          
                            
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="exampleInputName">Your Name <span class="astk">*</span></label>
                                <input type="text" class="form-control txt" id="exampleInputName" placeholder="" name="name" required="required">
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                  <label for="exampleInputSummary">Email <span class="astk">*</span></label>
                                  <input type="text" class="form-control txt" id="exampleInputSummary" placeholder="" name="summary" required="required">
                                </div><!-- /.form-group -->
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleInputReview">Review <span class="astk">*</span></label>

<textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder="" name="review" required="required"></textarea>
                                </div>
                              </div>
                            </div>
                            
                            <div class="action text-right">
                              <button name="submit" class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
                            </div>

                          </form>
                        </div>
                      </div>

                    </div>                  
                    
                      </div>
                </div>

        

              </div>
            </div>
          </div>
        </div>


            
      
      </div>
      <div class="clearfix"></div>
    </div>
</div>
</div>




@endsection