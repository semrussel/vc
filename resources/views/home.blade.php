@extends('layouts.app')

@section('htmlheader_title')
    Victorious Conquerors Dashboard
    <?php $active = 'dashboard'; ?>
@endsection

@section('contentheader_title')
    
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-gray"><i class="fa fa-opera"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">For One Verse</span>
                <span class="info-box-number">30</span>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
          </div>

          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-blue"><i class="fa fa-tint"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">For Baptism</span>
                <span class="info-box-number">100</span>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
          </div>

          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-maroon"><i class="fa fa-anchor"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">For Pre Encounter</span>
                <span class="info-box-number">100</span>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
          </div>

          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-etsy"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">For Encounter</span>
                <span class="info-box-number">2,000</span>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-red"><i class="fa fa-scribd"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">SOL 1</span>
                <span class="info-box-number">100</span>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
          </div>

          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-green"><i class="fa fa-scribd"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">SOL 2</span>
                <span class="info-box-number">100</span>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
          </div>

          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-orange"><i class="fa fa-scribd"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">SOL 3</span>
                <span class="info-box-number">30</span>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
          </div>

          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
          </div>
          
          <div class="col-md-8 col-md-offset-2">
            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">wew</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="box-body">
                {{ trans('adminlte_lang::message.logged') }}. Start creating your amazing application!
              </div><!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>

        </div>
    </div>
@endsection
