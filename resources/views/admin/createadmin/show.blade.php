@extends('Layouts.admin')


@section('content')


<h2 class="page-header">Manage</h2>
       <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                          <div class="panel-heading">
                                    <h3>View User</h3>
                                </div> 
<table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th>Contact No</th>
                          <th>Address</th>
                          <th>Created</th>
                          <th>Updated</th>
                          <th>Action</th>
                        </tr> 
                      </thead>


                   @if($u)
                        @foreach ($u as $object2)
                             <tbody>
                                  <tr>
                          
                                    <th>{{ $object2->id }}</th>
                                    <td>{{ $object2->name }}</td>
                                    <td>{{ $object2->email }}</td>
                                    <td>{{$object2->role ? $object2->role->name : 'No Role'}}</td>
                                    <td>{{ $object2->contact_no }}</td>
                                    <td>{{ $object2->address }}</td>
                                    <td>{{ $object2->created_at->diffForHumans()}}</td>
                                    <td>{{ $object2->updated_at->diffForHumans()}} </td>
                                    <td><a href="{{route('admin.edit', $object2->id)}}"><i class="fa fa-edit" style="font-size:14px"></i></a> </td>

                                    
                                 </tr>
                             </tbody>
                         
                        @endforeach
                    @endif

      </table>
@endsection