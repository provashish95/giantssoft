@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                    <div class="card">
                        <h6><a href="{{route('home')}}">Go Back</a></h6>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <tr>
                                <th>Student Name</th>
                                <th>Department Name</th>
                                <th>Student Roll</th>
                                <th>Student Email</th>
                                <th>Student Phone</th>
                                <th>Student Address</th>
                                <th>Action</th>
                            </tr>
                            @forelse($students as $student)
                                <tr>
                                    <th>{{ $student->name }}</th>
                                    <th>{{ $student->department->department_name }}</th>
                                    <th>{{ $student->roll }}</th>
                                    <th>{{ $student->email }}</th>
                                    <th>{{ $student->phone }}</th>
                                    <th>{{ $student->address }}</th>
                                    <th>
                                        <a href="{{URL::to('view/student/'.$student->id)}}" class="btn btn-sm btn-success">View</a>
                                    </th>
                                    <th>
                                        <a href="{{URL::to('delete/student/'.$student->id)}}" class="btn btn-sm btn-success">Delete</a>
                                    </th>
                                    <th>
                                        <a href="{{URL::to('edit/student/'.$student->id)}}" class="btn btn-sm btn-success">edit</a>
                                    </th>
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
