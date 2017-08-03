@extends('layouts.app')

@section('htmlheader_title')
    <?php $active = 'sunday'; ?>
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-xs-12">
            @include('errors.status-session')
            <div class="col-xs-11 dash-title"><h3>Sunday Attendance List</h3></div>
            <div class="col-xs-1 dash-title" style="margin-top: 10px;">
                <a href="{{ url('/attendance/sunday-service/add') }}" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add</a>
            </div>

            <div class="col-xs-12">
                <table id="disciple-table" class="table table-bordered admin-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Entry ID</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($attendances as $attendance)
                            <tr>
                                <td>{{ $attendance->id }}</td>
                                <td>Sunday Service - {{ $attendance->date }}</td>
                                <td>
                                    <a href="{{ url('/attendance/sunday-service/'.$attendance->id) }}" class="btn btn-primary btn-xs">View</a>
                                    <a href="{{ url('/attendance/sunday-service/edit/'.$attendance->id) }}" class="btn btn-info btn-xs">Edit</a>
                                    <form action="{{ url('/attendance/sunday-service/delete') }}" method="POST" style="display: -webkit-inline-box;">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="id" value="{{ $attendance->id }}">
                                        <input type="submit" value="Delete" class="btn btn-danger btn-xs">
                                    </form>
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
