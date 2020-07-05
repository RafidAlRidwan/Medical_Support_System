@extends('Layouts.user')

@section('content')

<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="#">Home</a></li>
        <li class='active'>Request List</li>
      </ul>
    </div><!-- /.breadcrumb-inner -->
  </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
  <div class="container">
    <div class="row inner-bottom-sm">
      <div class="shopping-cart">
        <div class="col-md-12 col-sm-12 shopping-cart-table ">
       <div class="table-responsive">


@if(Session::has('cart'))

  

    <table class="table table-bordered">


      <thead>
        <tr>
          <th class="cart-romove item">Remove</th>
          
          <th class="cart-product-name item">Item Name</th>
      
          <th class="cart-qty item">Quantity</th>
          <th class="cart-sub-total item">Price Per unit</th>
          
          <th class="cart-total last-item">Grandtotal</th>
        </tr>
      </thead><!-- /thead -->
      

  @foreach ($it as $object10)
      
      <tbody>
        <tr>

          <td class="romove-item">
            <a href="{{route('remove.request' , ['id'=> $object10['item']['id']])}}"><i class="fa fa-trash" style="font-size:14px"></i></a></td>


            <td class="cart-product-quantity"><span class="cart-quantity"><h4>{{$object10 ['item']['item_name']}}</h4></span></td>

          

          
      
          <td class="cart-product-quantity"><span class="cart-quantity"><h4>{{$object10['qty']}}</h4></span></td>

          <td class="cart-product-sub-total"><span class="cart-sub-total-price">{{$object10['item']['price']}} Tk</span></td>

          

          <td class="cart-product-grand-total"><span class="cart-grand-total-price">{{$object10['price']}} Tk</span></td>

        </tr>
      </tbody>

      @endforeach
   




    <tfoot>
          <tr>
           <td colspan="7">
             <div class="shopping-cart-btn">
               <span class="">
                 <a href=" /test5/public/medical" class="btn btn-upper btn-primary outer-left-xs">Continue</a>

               </span>
             </div><!-- /.shopping-cart-btn -->
           </td>
         </tr>
       </tfoot>


    </table><!-- /table -->
   </div>
 
</div><!-- /.shopping-cart-table -->      

          


<div class="col-md-4 col-sm-12 estimate-ship-tax">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>
          <span class="estimate-title">Delivery Address</span>
        </th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td>
            <div class="form-group">
            <h4> {{Auth::user()->address}}</h4>
    
            </div>
          
          </td>
        </tr>
    </tbody> 
  </table><!-- /table -->
</div>

<div class="col-md-4 col-sm-12 estimate-ship-tax">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>
          <span class="estimate-title">Payment Method</span>
        </th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td>
            <div class="form-group">
             <h4>Cash on delivery</h4>
    
            </div>
          
          </td>
        </tr>
    </tbody><!-- /tbody -->
  </table><!-- /table -->
</div>
<div class="col-md-4 col-sm-12 cart-shopping-total">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>
          
          <div class="cart-grand-total">
            Grand Total<span class="inner-left-md">{{$totalPrice}} Tk </span>
          </div>
        </th>
      </tr>
    </thead><!-- /thead -->
    <tbody>
        <tr>
          <td>

        

            <div class="form-group">
               <input type="hidden" id="payment_type" name="payment_type" value="Cash On Delivery">
            </div>

            <div class="form-group">
               <input type="hidden" id="status" name="status" value="Pending">
            </div>

            <div class="cart-checkout-btn pull-right">
                <a href="{{route('get.checkout')}}" class="btn btn-primary">Checkout</a>
            </div>  
        

    @else

 <h3><i class="fa fa-frown-o" aria-hidden="true">No Seleted Items!</i></h3>

@endif
            </div>
          </td>
        </tr>
    </tbody><!-- /tbody -->
  </table>
   

   
</div>      
</div>
</div> 





@endsection