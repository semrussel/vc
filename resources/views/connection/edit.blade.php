@extends('layouts.app')

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-11 dash-title"><h3>{{ getNickName($id) }}'s  disciples</h3></div>
            <div class="col-xs-1 dash-title" style="margin-top: 10px;">
                <a href="{{ url('/connections/add/'.$id) }}" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add</a>
            </div>

            <div class="col-xs-12">
                <table id="disciple-table" class="table table-bordered admin-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($connections as $connection)
                            <tr>
                                <td>{{ getFullName($connection->disciple_id) }}</td>
                                <td>
                                    <form action="{{ url('/delete-connection') }}" method="POST" style="display: -webkit-inline-box;">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="id" value="{{ $connection->id }}">
                                        <input type="hidden" name="discipler_id" value="{{ $connection->discipler_id }}">
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
@if(isset($_GET['successAdd']))
<script>alert('Successfully Added a new disciple!'); </script>
@endif
@if(isset($_GET['successDelete']))
<script>alert('Successfully Deleted a disciple!'); </script>
@endif
@endsection
