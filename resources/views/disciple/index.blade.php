@extends('layouts.app')

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-11 dash-title"><h3>Disciple</h3></div>
            <div class="col-xs-1 dash-title" style="margin-top: 10px;">
                <a href="{{ url('/add-disciple') }}" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add</a>
            </div>

            <div class="col-xs-12">
                <table id="disciple-table" class="table table-bordered admin-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Disciple ID</th>
                            <th>Full Name</th>
                            <th>Nick Name</th>
                            <th>Process</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($disciples as $disciple)
                            <tr>
                                <td>{{ $disciple->id }}</td>
                                <td>{{ $disciple->firstName }} {{ $disciple->lastName }}</td>
                                <td>{{ $disciple->nickName }}</td>
                                <td>{{ $disciple->process }}</td>
                                <td>{{ $disciple->spiStatus }}</td>
                                <td>
                                    <button class="btn btn-primary btn-xs">View</button>
                                    <button class="btn btn-info btn-xs">Edit</button>
                                    <button class="btn btn-danger btn-xs">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div><!-- /.row -->

</div>

@endsection
