@extends('Layouts.admin')


@section('content')

 <hr>
@include('includes.flash-message')


<h2 class="page-header">Manage</h2><br>
       <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                          <div class="panel-heading">
                                    <h3>View Item</h3>
                                </div>      
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Category Name</th>
                          <th>Item Name</th>
                          <th>Description</th>
                          <th>Price</th>
                          
                          <th>In Stock</th>
                          <th>Created</th>
                          <th>Updated</th>
                          <th>Action</th>
                        </tr> 
                      </thead>


                   @if($it)
                        @foreach ($it as $object5)
                             <tbody>
                                  <tr>
                          
                                    <th>{{ $object5->id }}</th>
                                    <td>{{ $object5->category ->category_name }}</td>
                                    <td>{{ $object5->item_name }}</td>
                                    <td>{{ $object5->description }}</td>
                                    <td>{{ $object5->price }}</td>
                                    
                                    <td> 
                                         {{$object5->stock == 1 ? 'Available' : 'Unavailable'}}

                                     </td>
                                    <td>{{ $object5->created_at->diffForHumans()}}</td>
                                    <td>{{ $object5->updated_at->diffForHumans()}} </td>
                                    <td><a href="{{route('adminitem.edit', $object5->id)}}"><i class="fa fa-edit" style="font-size:14px"></i></a> </td>

                                    
                                 </tr>
                             </tbody>
                         
                        @endforeach
                    @endif

      </table>

      <div class="row">
        <div class="col-sm-6 col-sm-offset-5">
          {{$it->render()}}
        </div>
      </div>
@endsection