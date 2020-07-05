@extends('Layouts.user')


@section('content')


<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="#">Home</a></li>
        <li class='active'>Request History</li>
      </ul>
    </div>
  </div>
</div>

<div class="body-content outer-top-xs">
  <div class="container">
    <div class="row inner-bottom-sm">
      <div class="shopping-cart">
        <div class="col-md-12 col-sm-12 shopping-cart-table ">
  <div class="table-responsive">
  
  <h3>My Request History <br></h3>
    @foreach($req as $re)
       <div class="panel panel-default">
          <div class="panel-body">
            <ul class="list-group">
              @foreach($re->request_list->items as $item)
               <li class="list-group-item"><span class="badge">{{$item['price']}} Tk</span>
               {{$item['item']['item_name']}} | {{$item['qty']}} </li>
             @endforeach
           </ul>
        </div>

     <div class="panel-footer">
     <strong> Request Date : {{$re-> created_at->diffForHumans()}} <br>
      Payement Type : Cash on Delivery <br>
       Total Bill :{{$re ->request_list -> totalPrice}} Tk <br>
    Status : {{$re->status ? $re->status : 'Pending'}} <br>
    Schedule : {{$re->comment ? $re->comment : 'Pending'}}
  </strong></div>
      
   </div>
   @endforeach


   </div>

    </div> 
    </div> 
    </div> 
</div> 


@endsection