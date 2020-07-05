@extends('Layouts.admin')


@section('content')


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
                                    <td>{{ $object3->categoryName }}</td>
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