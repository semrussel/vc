@extends('layouts.app')

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
      <div class="box">
        <div class="box-header with-border">
          <div class="col-md-12">Edit {{ $edit_data->name }} batch</div>
        </div>
        <div class="box-body">
          <form action="{{ url('/batch/edit/'.$edit_data->id) }}" method="POST">
            {!! csrf_field() !!}
            <div class="form-group">
              <label>Batch name:</label>
              <input value="{{ $edit_data->name }}" type="text" class="form-control" placeholder="Enter batch name" name="name">
            </div>
            <div class="form-group">
              <label>Bible Verse:</label>
              <input value="{{ $edit_data->bibleVerse }}" type="text" class="form-control" placeholder="Enter bible verse" name="bibleVerse">
            </div>
            <div class="form-group">
              <label>Select additional disciple:</label>
              <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" name="disciples[]">
                @foreach($disciples as $disple)
                  <option value="{{ $disple->id }}">{{ getFullName($disple->id) }}</option>
                @endforeach
              </select>
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
                      <form action="{{ url('/delete-batch') }}" method="POST" style="display: -webkit-inline-box;">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id" value="{{ $pivot->id }}">
                        <input type="submit" value="Delete" class="btn btn-danger btn-xs">
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>
<script> $('.select2').select2(); </script>
@endsection  