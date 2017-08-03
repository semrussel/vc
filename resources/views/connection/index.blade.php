@extends('layouts.app')

@section('htmlheader_title')
    <?php $active = 'connections'; ?>
@endsection

@section('css-per-page')
  <link href="{{ url('css/tree.css') }}" rel="stylesheet">
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
      <div class="box">
        <div class="box-header with-border">
          <div class="col-md-12">Search Cell Group </div>
        </div>
        <div class="box-body">
          <form action="{{ url('connections') }}" method="POST">
            {!! csrf_field() !!}
            <div class="form-group">
              <label>Select Cell Leader:</label>
              <select name="cellLeader" class="form-control select2">
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
@if(isset($_GET['successAdd']))
<script>alert('Successfully Added a new Connection!'); </script>
@endif
<script> $('.select2').select2(); </script>
@endsection  