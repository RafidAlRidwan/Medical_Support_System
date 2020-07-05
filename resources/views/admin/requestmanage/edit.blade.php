@extends('Layouts.admin')


@section('content')


<h1 class="page-header">Request Manage</h1>
<div class="row">
            
                <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3>
                                    Edit Request</h3>
                                </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-6">
                        <form method="post" action="/test5/public/adminrequest/{{$requ->id}}" >
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PUT">
                        
                          <div class="form-group">
                                <label for="payment_type">Select Payment Type</label>
                                <select name="payment_type" id="payment_type" class="form-control"> 
                                 
                                    <option value="Cash On Delivery"> Cash On Delivery </option>
                          
                                </select>
                            </div>
                              
                                
                                  
                                 <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control"> 
                                 
                                    <option value="In Process"> In Process </option>
                                    <option value="Cancelled"> Cancelled </option>
                                    <option value="Delivered"> Delivered </option>
                          
                                </select>
                            </div> 

                            <div class="form-group">
                                <label for="status">Comment</label>
                                <input type="text" id="comment" name="comment" class="form-control"> 
                                 
                                  
                            </div>   


                        <button type="submit" value="submit" class="btn btn-success">Update</button>
                        



                      </form>
          <form method="post" action="/test5/public/adminrequest/{{$requ->id}}">

         {{csrf_field()}}

          <input type="hidden" name="_method" value="DELETE">
          <br>

          <button type="submit" value="submit" class="btn btn-danger">Delete</button>

         </form>

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
