@extends('layouts.app')
@section('content')

    <div class="container">
        <form action="{{url('update/department/'.$department->id)}}" method="post">
            @csrf
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label style="color: #2d995b">Update Department Name</label>
                    <input type="text" class="form-control" style="width: 15%!important;" value="{{$department->department_name}}" name="department_name" >

                </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" >Update</button>
            </div>
        </form>
        <div>
            <h4><a href="{{route('AllDepartment')}}">Go Back</a></h4>
        </div>
    </div>



@endsection
