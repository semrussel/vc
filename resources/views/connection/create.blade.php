@extends('layouts.app')

@section('css-per-page')
  <link href="{{ url('css/tree.css') }}" rel="stylesheet">
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
      <div class="box">
        <div class="box-header with-border">
          <div class="col-md-12">Create connection for {{ getNickName($id) }}'s cell group</div>
        </div>
        <div class="box-body">
          <form action="{{ url('/connections/add/'.$id) }}" method="POST">
            {!! csrf_field() !!}
            <div class="form-group">
              <label>Select Cell Member:</label>
              <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" name="cellMember[]">
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