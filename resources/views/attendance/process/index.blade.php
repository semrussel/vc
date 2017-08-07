@extends('layouts.app')

@section('htmlheader_title')
    <?php $active = $process; ?>
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-xs-12">
            @include('errors.status-session')
            <div class="col-xs-11 dash-title"><h3>Batch under {{ ucwords($process) }}</h3></div>
            <div class="col-xs-1 dash-title" style="margin-top: 10px;">
                <a href="{{ url('/attendance/cell/add') }}" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add</a>
            </div>

            <div class="col-xs-12">
                <table id="disciple-table" class="table table-bordered admin-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Batch name</th>
                            <th>Start Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($batches as $batch)
                            <tr>
                                <td>{{ getBatchName($batch->batch_id) }}</td>
                                <td>{{ $batch->startDate }}</td>
                                <td>
                                    <a href="{{ url('/attendance/process/'.$process.'/'.$batch->id) }}" class="btn btn-primary btn-xs">View</a>
                                    <a href="{{ url('/attendance/process/'.$process.'/'.$batch->id) }}" class="btn btn-info btn-xs">Edit</a>
                                    <form action="{{ url('/attendance/process/'.$process.'/delete') }}" method="POST" style="display: -webkit-inline-box;">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="id" value="{{ $batch->id }}">
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
