@extends('layouts.app')
@section('content')
   <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-8">
               <div  class="card">
                   <div>
                       <h6><a href="{{route('AllDepartment')}}">Go Back</a></h6>
                   </div>
           <table style="color: #2a9055" border="1px;">
               <thead>
               <th style="color: #123c24; text-align: center"><a href="{{URL::to('edit/department/'.$department->id)}}">{{$department->department_name}}</a></th>
               </thead>
               <tbody>
               @foreach($students as $student)
                 <td>
                     <ul>
                         <li style="text-align: left">
                         <a href="{{URL::to('view/student/'.$student->id)}}" >{{$student->name}}</a>
                         </li>
                     </ul>
                 </td>
               </tbody>
               @endforeach
           </table>
                   <div>
                       <h6><a href="{{route('AddDepartment')}}">Add Department</a></h6>
                   </div>
                   <div>
                       <h6><a href="{{route('AddStudent')}}">Student Registration</a></h6>
                   </div>
               </div>
           </div>
       </div>

   </div>
@endsection
