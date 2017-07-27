@extends('layouts.app')

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
      <div class="box">
        <div class="box-header with-border">
          <div class="col-md-12">Create Batch</div>
        </div>
        <div class="box-body">
          <form action="{{ url('/add-batch') }}" method="POST">
            {!! csrf_field() !!}
            <div class="form-group">
              <label>Batch name:</label>
              <input type="text" class="form-control" placeholder="Enter batch name" name="name" required>
            </div>
            <div class="form-group">
              <label>Bible Verse:</label>
              <input type="text" class="form-control" placeholder="Enter bible verse" name="bibleVerse" required>
            </div>
            <div class="form-group">
              <label>Select disciple:</label>
              <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" name="disciples[]">
                @foreach($disciples as $disple)
                  <option value="{{ $disple->id }}">{{ getFullName($disple->id) }}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>
<script> $('.select2').select2(); </script>
@endsection  