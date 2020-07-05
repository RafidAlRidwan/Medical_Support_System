@extends('Layouts.admin')


@section('content')

<h1 class="page-header">Admin</h1>
<div class="row">
            
                <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3>
                                   Create Admin</h3>
                                </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-6">
                        <form method="post" action="/test5/public/admincreate" >
                        {{csrf_field()}}
                        
                          <div class="form-group">
                              <label for="name">Name</label>
                              
                              <input type="text" id="name" name="name" class="form-control">
                              <p class="help-block"></p>
                          </div>
                              
                                <div class="form-group">
                                    <label for="email">Email</label>
                                      <input type="text" id="email" name="email" class="form-control">
                                        <p class="help-block"></p>
                                </div>

                                
                                

                                
                                
                                      <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" name="password" minlength="8" class="form-control">
                                          <p class="help-block"></p>
                                      </div>


                        <button type="submit" value="submit" class="btn btn-primary btn-lg btn-block">Create</button>




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


<h2 class="page-header"></h2> <br>
       <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                          <div class="panel-heading">
                                    <h3>View Admin</h3>
                                </div>      
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Created</th>
                          <th>Updated</th>
                          <th>Action</th>
                        </tr> 
                      </thead>


                   @if($ad)
                        @foreach ($ad as $object9)
                             <tbody>
                                  <tr>
                          
                                    <th>{{ $object9->id }}</th>
                                    <td>{{ $object9->name }}</td>
                                    <td>{{ $object9->email }}</td>
                                    <td>{{ $object9->created_at->diffForHumans()}}</td>
                                    <td>{{ $object9->updated_at->diffForHumans() }} </td>
                                    <td>

          <form method="post" action="/test5/public/admincreate/">

         {{csrf_field()}}

          <input type="hidden" name="_method" value="DELETE">
          

          <button type="submit" value="submit" class="icon-remove" style="font-size:14px"></button>

         </form>
       </td>

                                    
                                 </tr>
                             </tbody>
                         
                        @endforeach
                    @endif

      </table>
@endsection
