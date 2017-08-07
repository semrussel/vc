@extends('layouts.app')

@section('htmlheader_title')
    <?php $active = 'cell'; ?>
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
      <div class="box">
        <div class="box-header with-border">
          <div class="col-md-12">
            Cell group meeting of {{ getFullName($edit_data->cellLeader_id) }} - {{ $edit_data->date }}
            <div class="pull-right">
              <a href="{{ url('/attendance/cell') }}" class="btn btn-default btn-sm">Back</a>
            </div>
          </div>
        </div>
        <div class="box-body">
          @include('errors.status-session')
          <div class="form-group">
            <label>Date:</label>
            <input value="{{ $edit_data->date }}" type="date" class="form-control" disabled>
          </div>

          <div class="form-group">
            <label>Cell leader:</label>
            <input value="{{ getFullName($edit_data->cellLeader_id) }}" type="text" class="form-control" disabled>
          </div>

          <h2>Attendance:</h2>

          <table id="disciple-table" class="table table-bordered admin-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Attenders</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($pivots as $pivot)
                <tr>
                  <td>{{ getFullName($pivot->disciple_id) }}</td>
                  <td>
                    <form name="deletePivot{{ $pivot->id }}" action="{{ url('/pivot/delete') }}" method="POST" style="display: -webkit-inline-box;">
                      {!! csrf_field() !!}
                      <input type="hidden" name="id" value="{{ $pivot->id }}">
                      <input type="hidden" name="table_name" value="pivot_disciple_attendances">
                      <input type="hidden" name="url_return" value="/attendance/cell/">
                      <input type="hidden" name="return_id" value="{{ $pivot->attendance_id }}">
                      <input type="submit" value="Delete" class="btn btn-danger btn-xs">
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection  


