@extends('layouts.app')

@section('htmlheader_title')
    <?php $active = 'disciples'; ?>
@endsection

@section('main-content')
<script type="text/javascript">
  $(document).ready(function() {
    $("#cellLeader").select2();
  });
</script>
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-xs-12">
          @include('errors.status-session')
          <div class="col-xs-12 dash-title"><h3>Edit {{ getNickName($edit_data->id) }}'s Profile</h3></div>
          <form method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <input type="hidden" name="disciple_id" value="{{ $edit_data->id }}">
            <div class="col-md-6 col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Personal Information</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body" >
                  <div class="col-md-6 col-xs-12">
                    <label for="firstName">First Name</label>
                    <input required type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter first name" value="{{ $edit_data->firstName }}">
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <label for="lastName">Last Name</label>
                    <input required type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter last name" value="{{ $edit_data->lastName }}">
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <label for="nickName">Nick Name</label>
                    <input type="text" class="form-control" id="nickName" name="nickName" placeholder="Enter nick name" value="{{ $edit_data->nickName }}">
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-control">
                      <option @if($edit_data->gender == 'MALE') selected  @endif value="MALE">MALE</option>
                      <option @if($edit_data->gender == 'FEMALE') selected  @endif value="FEMALE">FEMALE</option>
                    </select>
                  </div>
                  <div class="col-xs-12">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" value="{{ $edit_data->address }}">
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <label for="school">School / University</label>
                    <input type="text" class="form-control" id="school" name="school" placeholder="Enter school or university" value="{{ $edit_data->school }}">
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" id="company" name="company" placeholder="If he/she still student type NONE" value="{{ $edit_data->company }}">
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <label for="contactNo">Contact Number</label>
                    <input required type="text" class="form-control" id="contactNo" name="contactNo" placeholder="Enter contact number" value="{{ $edit_data->contactNo }}">
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <label for="phyBirth">Birth Date</label>
                    <input type="date" class="form-control" id="phyBirth" name="phyBirth" value="{{ $edit_data->phyBirth }}">
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <label for="cStatus">Civil Status:</label>
                    <select name="cStatus" id="cStatus" class="form-control">
                      <option @if($edit_data->cStatus == 'SINGLE') selected  @endif value="SINGLE">SINGLE</option>
                      <option @if($edit_data->cStatus == 'MARRIED') selected  @endif value="MARRIED">MARRIED</option>
                      <option @if($edit_data->cStatus == 'DIVORCED') selected  @endif value="DIVORCED">DIVORCED</option>
                      <option @if($edit_data->cStatus == 'WIDOWED') selected  @endif value="WIDOWED">WIDOWED</option>
                    </select>
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <label for="picture">Upload Picture</label>
                    <input type="file" name="picture" id="picture">
                  </div>
                  
                </div>
                <!-- /.box-body -->
              </div>
            </div>

            <div class="col-md-6 col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Spiritual Information</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body" style="padding-bottom: 25px;">
                  <div class="col-xs-12">
                    <label for="process">Under What Process:</label>
                    <select name="process" id="process" class="form-control">
                      <option @if($edit_data->process == 'TARGET') selected  @endif value="TARGET">VIP</option>
                      <option @if($edit_data->process == 'OVE') selected  @endif value="OVE">OVE</option>
                      <option @if($edit_data->process == 'PRE ENCOUNTER') selected  @endif value="PRE ENCOUNTER">PRE ENCOUNTER</option>
                      <option @if($edit_data->process == 'ENCOUNTER') selected  @endif value="OVE" value="ENCOUNTER">ENCOUNTER</option>
                      <option @if($edit_data->process == 'POST ENCOUNTER') selected  @endif value="POST ENCOUNTER">POST ENCOUNTER</option>
                      <option @if($edit_data->process == 'SOL 1') selected  @endif value="SOL 1">SOL 1</option>
                      <option @if($edit_data->process == 'SOL 2') selected  @endif value="SOL 2">SOL 2</option>
                      <option @if($edit_data->process == 'SOL 3') selected  @endif value="SOL 3">SOL 3</option>
                      <option @if($edit_data->process == 'PEPSOL GRADUATE') selected  @endif value="PEPSOL GRADUATE">PEPSOL GRADUATE</option>
                    </select>
                  </div>
                  <div class="col-xs-12">
                    <label for="spiBirth">Spiritual Birth</label>
                    <input type="date" class="form-control" id="spiBirth" name="spiBirth" value={{ $edit_data->spiBirth }}>
                  </div>
                  <div class="col-xs-12">
                    <label for="bapt">Is Baptized?</label>
                    <select name="bapt" id="bapt" class="form-control">
                      <option @if($edit_data->bapt == 'NO') selected  @endif value="NO">NO</option>
                      <option @if($edit_data->bapt == 'YES') selected  @endif value="YES">YES</option>
                    </select>
                  </div>
                  <div class="col-xs-12">
                    <label for="isFirstGen">Is First Christian in his/her family?</label>
                    <select name="isFirstGen" id="isFirstGen" class="form-control">
                      <option @if($edit_data->isFirstGen == 'NO') selected  @endif value="NO">NO</option>
                      <option @if($edit_data->isFirstGen == 'YES') selected  @endif value="YES">YES</option>
                    </select>
                  </div>
                  <div class="col-xs-12">
                    <label for="spiStatus">Spiritual Status</label>
                    <select name="spiStatus" id="spiStatus" class="form-control">
                      <option @if($edit_data->spiStatus == 'N/A') selected  @endif value="N/A">N/A</option>
                      <option @if($edit_data->spiStatus == 'COLD') selected  @endif value="COLD">COLD</option>
                      <option @if($edit_data->spiStatus == 'ON FIRE') selected  @endif value="ON FIRE">ON FIRE</option>
                      <option @if($edit_data->spiStatus == 'NOT YET SOLD OUT') selected  @endif value="NOT YET SOLD OUT">NOT YET SOLD OUT</option>
                    </select>
                  </div>
                  <div class="col-xs-12">
                    <label for="cellLeader">Cell Leader</label>
                    <select name="cellLeader" id="cellLeader" class="form-control">
                        <option @if($edit_data->cellLeader == $discipler_id) selected  @endif value="0"> NONE </option>
                      @foreach($disciples as $disciple)
                        <option @if($discipler_id == $disciple->id) selected  @endif value="{{ $disciple->id }}">{{ $disciple->firstName }} {{ $disciple->lastName }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
            <div class="col-md-offset-11 col-md-1 col-xs-offset-9 col-xs-3">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div> 
          </form>
        </div>
            
                  
          

        </div>

    </div><!-- /.row -->

</div>

@endsection
