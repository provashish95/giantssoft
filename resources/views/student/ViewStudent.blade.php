@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {{--                <a href="{{route('all.post')}}" class="btn btn-info">All Posts</a>--}}
                <hr>
                <div>
                    <h6><a href="{{route('AllStudent')}}">Go Back</a></h6>
                    <table border="2px;" style="text-align: center; color: #2d995b">
                        <tr style="color: #5d561b">
                            <th>Name</th>
                            <th>Department</th>
                            <th>Roll</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                        </tr>
                        <tr>
                            <td>{{$students->name}}</td>
                            <td>{{$students->department->department_name}}</td>
                            <td>{{$students->roll}}</td>
                            <td>{{$students->phone}}</td>
                            <td>{{$students->email}}</td>
                            <td>{{$students->address}}</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
