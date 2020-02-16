@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{route('StoreDepartment')}}" method="post">
        @csrf
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label style="color: #2d995b">Insert Department Name</label>
                <input type="text" class="form-control" style="width: 15%!important;" placeholder="department Name" name="department_name" >

            </div>
        </div>
        <br>
        <div id="success"></div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" >Submit</button>
        </div>
        <div>
            <h6><a href="{{route('AllDepartment')}}">Show all Department</a></h6>
            <h6><a href="{{route('AllStudent')}}">Show all Student </a></h6>
            <h6><a href="{{route('home')}}">Go Back</a></h6>
        </div>
    </form>
</div>



@endsection
