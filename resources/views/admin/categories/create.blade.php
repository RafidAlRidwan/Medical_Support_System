
@extends('Layouts.admin')


@section('content')
<hr>
@include('includes.flash-message')

<h1 class="page-header">Category</h1>
<div class="row">
            
                <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3>
                                    Create Category</h3>
                                </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-6">
                        <form method="post" action="/test5/public/admincategory" >
                        {{csrf_field()}}
                        
                          <div class="form-group">
                              <label for="category_name">Category Name</label>
                              
                              <input type="text" id="category_name" name="category_name" class="form-control">

                              <p class="help-block"></p>
                              
                          </div>
                              
                                
                            <div class="form-group">
                                  <label for="description">Description</label>
                                    <textarea id="description" name="description" class="form-control" rows="4"></textarea>
                            </div>


                        <button type="submit" value="submit" class="btn btn-primary btn-lg btn-block">Create</button>
                      @if(count($errors) > 0)

                        <ul>
                          @foreach($errors->all() as $error)
                                 <li> {{$error}}</li>
                          @endforeach
                        </ul>
                     @endif
                    </div>
                  </div>
              </div>
            
</div>
                      


<h2 class="page-header"></h2> <br>
       <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                          <div class="panel-heading">
                                    <h3>Manage Category</h3>
                                </div>      
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Category Name</th>
                          <th>Description</th>
                          <th>Created</th>
                          <th>Updated</th>
                          <th>Action</th>
                        </tr> 
                      </thead>


                   @if($cate)
                        @foreach ($cate as $object3)
                             <tbody>
                                  <tr>
                          
                                    <th>{{ $object3->id }}</th>
                                    <td>{{ $object3->category_name }}</td>
                                    <td>{{ $object3->description }}</td>
                                    <td>{{ $object3->created_at->diffForHumans()}}</td>
                                    <td>{{ $object3->updated_at->diffForHumans() }} </td>
                                    <td><a href="{{route('admincategory.edit', $object3->id)}}"><i class="fa fa-edit" style="font-size:14px"></i></a> </td>

                                    
                                 </tr>
                             </tbody>
                         
                        @endforeach
                    @endif

      </table>















@endsection
