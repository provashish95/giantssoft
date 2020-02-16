@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
       <div class="card">
           <h6><a href="{{route('AddDepartment')}}">Add Department</a></h6>
           <h6><a href="{{route('home')}}">Go Back</a></h6>


           <table id="example" class="table table-striped table-bordered" style="width:100%">
               <tr>
                   <th style="text-align: center">Department Name</th>
                   <th style="text-align: center">Action</th>
               </tr>
               @forelse($departments as $department)
                   <tr>
                       <th> {{$department->department_name}}</th>
                       <td style="text-align: center">
                           <a href="{{URL::to('edit/department/'.$department->id)}}" class="btn btn-sm btn-success">Edit</a>
                           <a href="{{URL::to('delete/department/'.$department->id)}}" class="btn btn-sm btn-success">Delete</a>
                           <a href="{{URL::to('view/departmentById/'.$department->id)}}" class="btn btn-sm btn-success">all students of :{{$department->department_name}}</a>
                       </td>
                   </tr>
               @empty
                   <p>No data found!</p>
               @endforelse
           </table>
       </div>
       </div>
   </div>
</div>
@endsection
