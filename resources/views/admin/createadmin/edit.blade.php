@extends('Layouts.admin')


@section('content')

<h1 class="page-header">Manage User</h1>
<div class="row">
            
                <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3>
                                    Edit User</h3>
                                </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-6">
                        <form method="post" action="/test5/public/admin/{{$u->id}}" >
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PUT">
                        
                          <div class="form-group">
                              <label for="name">Name</label>
                              
                              <input type="text" id="name" name="name" value="{{$u->name}}" class="form-control">
                              <p class="help-block"></p>
                          </div>
                              <div class="form-group">
                                <label for="role_id">Role</label>
                                <select name="role_id" id="role_id" class="form-control"> 
                                  
                                                        
                      @if($r)
                              @foreach ($r as $object)
                                    <option value="{{ $object->id }}"> {{ $object->name }} </option>
                              @endforeach
                      @endif
                                                        
                                </select>
                            </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                      <input type="text" id="email" name="email" value="{{$u->email}}" class="form-control">
                                        <p class="help-block"></p>
                                </div>

                                <div class="form-group">
                                    <label for="contact_no">Contact No.</label>
                                      <input type="text" id="contact_no" name="contact_no" value="{{$u->contact_no}}" class="form-control">
                                        <p class="help-block"></p>
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                      <textarea type="text" id="address" name="address" value="{{$u->address}}" class="form-control"></textarea>
                                        <p class="help-block"></p>
                                </div>
                                

                                      <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" name="password" value="{{$u->password}}" minlength="8" class="form-control">
                                          <p class="help-block"></p>
                                      </div>


                        <button type="submit" value="submit" class="btn btn-success">Update</button>
                        



                      </form>
          <form method="post" action="/test5/public/admin/{{$u->id}}">

         {{csrf_field()}}

          <input type="hidden" name="_method" value="DELETE">
          <br>

          <button type="submit" value="submit" class="btn btn-danger">Delete</button>

         </form>


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
