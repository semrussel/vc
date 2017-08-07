@extends('layouts.app')

@section('htmlheader_title')
    <?php $active = 'cell'; ?>
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
      <div class="box">
        <div class="box-header with-border">
          <div class="col-md-12">Create Cell group meeting</div>
        </div>
        <div class="box-body">
          <form action="{{ url('/attendance/cell/add') }}" method="POST">
            {!! csrf_field() !!}
            <div class="form-group">
              <label>Date:</label>
              <input type="date" class="form-control" name="date" required>
            </div>
            <div class="form-group">
              <label>Cell Leader:</label>
              <select class="form-control select2" data-placeholder="Select cell leader" style="width: 100%;" name="cellLeader">
                @foreach($cellLeads as $cellLead)
                  <option value="{{ $cellLead->id }}">{{ getFullName($cellLead->id) }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Select disciples who attended:</label>
              <select class="form-control select2" multiple="multiple" data-placeholder="Select disciples" style="width: 100%;" name="disciples[]">
                @foreach($disciples as $disciple)
                  <option value="{{ $disciple->id }}">{{ getFullName($disciple->id) }}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ url('/attendance/cell') }}" class="btn btn-default">Cancel</a>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection 

@push('scripts')
<script> $('.select2').select2(); </script>
@endpush