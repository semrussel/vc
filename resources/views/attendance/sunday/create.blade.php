@extends('layouts.app')

@section('htmlheader_title')
    <?php $active = 'sunday'; ?>
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
      <div class="box">
        <div class="box-header with-border">
          <div class="col-md-12">Create Sunday Service</div>
        </div>
        <div class="box-body">
          <form action="{{ url('/attendance/sunday-service/add') }}" method="POST">
            {!! csrf_field() !!}
            <div class="form-group">
              <label>Date:</label>
              <input type="date" class="form-control" name="date" required>
            </div>
            <div class="form-group">
              <label>Select disciples who attended:</label>
              <select class="form-control select2" multiple="multiple" data-placeholder="Select disciples" style="width: 100%;" name="disciples[]">
                @foreach($disciples as $disple)
                  <option value="{{ $disple->id }}">{{ getFullName($disple->id) }}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ url('/batch') }}" class="btn btn-default">Cancel</a>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection 

@push('scripts')
<script> $('.select2').select2(); </script>
@endpush