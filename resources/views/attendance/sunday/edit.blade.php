@extends('layouts.app')

@section('htmlheader_title')
    <?php $active = 'sunday'; ?>
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
      <div class="box">
        <div class="box-header with-border">
          <div class="col-md-12">Edit {{ $edit_data->name }} batch</div>
        </div>
        <div class="box-body">
          @include('errors.status-session')
          <form action="{{ url('/attendance/sunday-service/edit/'.$edit_data->id) }}" method="POST">
            {!! csrf_field() !!}
            <div class="form-group">
              <label>Date:</label>
              <input value="{{ $edit_data->date }}" type="date" class="form-control" disabled>
            </div>
            <div class="form-group">
              <label>Select additional attenders:</label>
              <select class="form-control select2" multiple="multiple" data-placeholder="Select disciple" style="width: 100%;" name="disciples[]">
                @foreach($disciples as $disple)
                  <option value="{{ $disple->id }}">{{ getFullName($disple->id) }}</option>
                @endforeach
              </select>
            </div>
            <table id="disciple-table" class="table table-bordered admin-table" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>List of Attenders</th>
                </tr>
              </thead>
              <tbody>
                @foreach($pivots as $pivot)
                  <tr>
                    <td>{{ getFullName($pivot->disciple_id) }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ url('/attendance/sunday-service') }}" class="btn btn-default">Cancel</a>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection

@push('scripts')
<script> $('.select2').select2(); </script>
@endpush  