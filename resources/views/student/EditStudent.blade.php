@extends('layouts.app')
@section('content')
    <div class="container" style="border: 50px">
        <div class="col-md-5">
            <h6><a href="{{route('AllStudent')}}">Go Back</a></h6>
            <form action="{{url('update/student/'.$student->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Student Name</label>
                    <input type="text" class="form-control"  aria-describedby="emailHelp" value="{{$student->name}}" name="name">
                </div>
                <label>Department</label>
                <select class="form-control" name="department_id">
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                    @endforeach
                </select>
                <div class="form-group">
                    <label for="exampleInputPassword1">Roll</label>
                    <input type="number" class="form-control"  value="{{$student->roll}}" name="roll">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" value="{{$student->email}}" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="number" class="form-control" value="{{$student->phone}}" name="phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" value="{{$student->address}}" name="address">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

@endsection

