@extends('layouts.app')

@section('css-per-page')
  <link href="{{ url('css/tree.css') }}" rel="stylesheet">
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
    <div class="row">
      <div class="box">
        <div class="box-header with-border">
          <div class="col-md-12">
            {{ getNickName($id)."'s" }}
            <div class="pull-right">
              <a href="{{ url('connections/edit/'.$id) }}" class=""> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Connection </a>
            </div>
          </div>
        </div>
        <div class="box-body">
          <div class="tree">
            <ul>
              <li>
                <a href="{{ url('/connections?id='.$id) }}">{{ getFullName($id) }}</a>
                @if(count($connections) != 0)
                  <ul>
                    @foreach($connections as $connection)
                      <li>
                        <a href="{{ url('/connections/'.$connection->disciple_id) }}">
                          {{ getNickName($connection->disciple_id) }}
                        </a> 
                      </li>
                    @endforeach
                  </ul>
                @endif
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection  