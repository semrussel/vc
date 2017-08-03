@extends('layouts.app')

@section('htmlheader_title')
    <?php $active = 'batch'; ?>
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
      <div class="box">
        <div class="box-header with-border">
          <div class="col-md-12">
            {{ $edit_data->name }} Batch
            <div class="pull-right">
              <a href="{{ url('/batch') }}" class="btn btn-default btn-sm">Back</a>
            </div>
          </div>
        </div>
        <div class="box-body">
          @include('errors.status-session')
          {!! csrf_field() !!}
          <div class="form-group">
            <label>Batch name:</label>
            <input value="{{ $edit_data->name }}" type="text" class="form-control" placeholder="Enter batch name" name="name" disabled>
          </div>
          <div class="form-group">
            <label>Bible Verse:</label>
            <input value="{{ $edit_data->bibleVerse }}" type="text" class="form-control" placeholder="Enter bible verse" name="bibleVerse" disabled>
          </div>
          <table id="disciple-table" class="table table-bordered admin-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Batch Members</th>
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
                      <input type="hidden" name="table_name" value="pivot_disciple_batch">
                      <input type="hidden" name="url_return" value="/batch/">
                      <input type="hidden" name="return_id" value="{{ $pivot->batch_id }}">
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
<script> $('.select2').select2(); </script>
@endsection  