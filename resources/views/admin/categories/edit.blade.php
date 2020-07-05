@extends('Layouts.admin')


@section('content')


<h1 class="page-header">Category</h1>
<div class="row">
            
                <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3>
                                    Edit Category</h3>
                                </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-6">
                        <form method="post" action="/test5/public/admincategory/{{$cate->id}}" >
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PUT">
                        
                          <div class="form-group">
                              <label for="category_name">Category Name</label>
                              
                              <input type="text" id="category_name" name="category_name" value="{{$cate->category_name}}" class="form-control">
                              <p class="help-block"></p>
                          </div>
                              
                                
                                  
                                  <div class="form-group">
                                  <label for="description">Description</label>
                                    <textarea id="description"   name="description"  class="form-control" rows="4">{{$cate->description}}</textarea>
                            </div>    


                        <button type="submit" value="submit" class="btn btn-success">Update</button>
                        



                      </form>
          <form method="post" action="/test5/public/admincategory/{{$cate->id}}">

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
