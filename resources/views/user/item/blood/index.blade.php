@extends('Layouts.user')

@section('content')

<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row outer-bottom-sm'>
            <div class='col-md-3 sidebar'>
                <div class="sidebar-module-container">
                   <div class="sidebar-filter">
                        
                   <div class="sidebar-widget wow fadeInUp outer-bottom-xs  ">
                     <div class="widget-header m-t-20">
                       <h2 class="widget-title">Category</h2>
                     </div>
                      <div class="sidebar-widget-body m-t-10">
                        <div class="accordion">
                          <div class="accordion-group">
                             <div class="accordion-heading">
                                 <a href="/test5/public/doctor "  class="accordion-toggle collapsed">Doctor</a>
                                 <a href=" /test5/public/ambulance"  class="accordion-toggle collapsed">Ambulance</a>
                                 <a href="/test5/public/blood "  class="accordion-toggle collapsed">Blood</a>
                            </div>  
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>



            <div class='col-md-9'>
              <div id="category" class="category-carousel hidden-xs">
                <div class="item">  
                  <div class="image">
                     <img src="{{asset('user/assets/images/banners/cat-banner-13.jpg')}}" width="900" height="255"img-responsive">
                  </div>
                    <div class="container-fluid">
                       <div class="caption vertical-top text-left">
                          <div class="big-text">
                           <br />
                         </div>

                          <div class="excerpt hidden-sm hidden-md">
                            </div>
                          </div>
                        </div>
                      </div>
                   </div>



         


                <div class="search-result-container">
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane active " id="grid-container">
                            <div class="category-product  inner-top-vs">
                                <div class="row">  



                        
                                @if($it)
                                       @foreach($it as $object8)
                                       @if($object8->category_id == 3)   
                                         

                                                                  
                                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                                    <div class="products">              
                                      <div class="product"> 
                                        <div class="product-image">
                                          <div class="image">
                                            <img width="150" height="160" src="/test5/public/images/itemimages/{{$object8 -> photo_file}}">
                                          </div>                                       
                                       </div>
            


        
                       <div class="product-info text-left">
                         <h3 class="name"><a href="{{route('blood.show', $object8->id)}}">{{$object8->item_name}} </a></h3>
                           <div class="description"></div>
                             <div class="product-price"> 
                                <span class="price">
                                   Tk.{{$object8->price}}</span>
                            </div>
                          </div>


                 <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                         <li class="add-cart-button btn-group">
                            <a href="{{route('request.add' , $object8->id)}}">
                            <button class="btn btn-primary" type="button">Request</button></a>
                          </li>
                       


                        <li class="lnk wishlist">
                            
                        </li>
                       </ul>
                     </div>
                   </div>
                
                </div>

             </div>
          </div>



@endif
@endforeach
@endif






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