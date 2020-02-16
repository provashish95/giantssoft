@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(!empty($students))
                <div class="card">
                    <h6><a href="{{route('home')}}">Go Back</a></h6>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Department Name</th>
                                <th>Student Roll</th>
                                <th>Student Email</th>
                                <th>Student Phone</th>
                                <th>Student Address</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Student Name</th>
                                <th>Department Name</th>
                                <th>Student Roll</th>
                                <th>Student Email</th>
                                <th>Student Phone</th>
                                <th>Student Address</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                </div>
                @else
                    <h1>No Data</h1>
                @endif
            </div>
        </div>
    </div>
@endsection
