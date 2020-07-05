

@extends('Layouts.admin')


@section('content')
<hr>
@include('includes.flash-message')

<h2 class="page-header">Request Management</h2> <br>
       <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                          <div class="panel-heading">
                                    <h3>Manage Request</h3>
                                </div>      
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Customer Name</th>
                          <th>Item List</th>
                          <th>Delivery Address</th>
                          <th>Contact Number</th>
                          <th>Total Bill</th>
                          <th>Payment Type</th>
                          <th>Status</th>
                          <th>Comment</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr> 
                      </thead>


                  
                        @foreach ($req as $re)
                             <tbody>
                                  <tr>
                          
                                    <th>{{ $re->id }}</th>
                                    <td>{{ $re->user_name }}</td>
                                    <td>@foreach($re->request_list->items as $item)
               {{$item['item']['item_name']}}  ({{$item['qty']}})<br>
             @endforeach</td>
                                    <td>{{ $re->delivery_address }}</td>
                                    <td>{{ $re->user->contact_no }}</td>
                                    <td>{{ $re->total_bill }}</td>
                                    <td>{{$re->payment_type ? $re->payment_type : 'Cash On Delivery'}}</td>
                                    <td>{{$re->status ? $re->status : 'Pending'}}</td>
                                    <td>{{$re->comment ? $re->comment : 'Pending'}}</td>
                                    <td>{{ $re->updated_at->diffForHumans() }} </td>
                                    <td><a href="{{route('adminrequest.edit', $re->id)}}"><i class="fa fa-edit" style="font-size:14px"></i></a> </td>

                                    
                                 </tr>
                             </tbody>
                         
                        @endforeach
                    

      </table>

<div class="row">
        <div class="col-sm-6 col-sm-offset-5">
          {{$req->render()}}
        </div>
      </div>
                  
@endsection