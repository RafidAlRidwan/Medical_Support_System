@extends('Layouts.admin')


@section('content')

<h1 class="page-header">Item</h1>
<div class="row">
            
                <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3>
                                    Create Item</h3>
                                </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-6">
                        <form method="post" files="true" action="/test5/public/adminitem" >
                        {{csrf_field()}}

                        <div class="form-group">
                                <label for="categoryId">Select Category</label>
                                <select name="categoryId" id="categoryId" class="form-control"> 
                                  
                                                        
                      @if($cate)
                              @foreach ($cate as $object4)
                                    <option value="{{ $object4->id }}"> {{ $object4->categoryName }} </option>
                              @endforeach
                      @endif
                                                        
                                </select>
                            </div>
                        
                          <div class="form-group">
                              <label for="itemName">Item Name</label>
                              
                              <input type="text" id="itemName" name="itemName" class="form-control">
                              <p class="help-block"></p>
                          </div>
                              
                                
                            <div class="form-group">
                                  <label for="description">Description</label>
                                    <textarea id="description" name="description" class="form-control" rows="4"></textarea>
                            </div>

                            <div class="form-group">
                              <label for="price">Price</label>
                              
                              <input type="text" id="price" name="price" class="form-control">
                              <p class="help-block"></p>
                          </div>

                          <div class="form-group">
                              <label for="deliveryCharge">Delivery Charge</label>
                              
                              <input type="text" id="deliveryCharge" name="deliveryCharge" class="form-control">
                              <p class="help-block"></p>
                          </div>

                          <div class="form-group">
                                <label for="stock">In Stock</label>
                                <select name="stock" id="stock" class="form-control"> 
                          
                                    <option value="1"> Available </option>
                                    <option value="2"> Unavailable </option>
                                                  
                                </select>
                            </div>

                            <div class="form-group">
                                        <label for="photo_file">Picture</label>
                                        <input type="file" id="photo_file" name="photo_file" > <br>
                            </div>


                        <button type="submit" value="submit" class="btn btn-success">Create</button>
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
