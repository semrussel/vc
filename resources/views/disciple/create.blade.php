@extends('layouts.app')

@section('main-content')
<script type="text/javascript">
  $(document).ready(function() {
    $("#cellLeader").select2();
  });
</script>
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-xs-12">
          <div class="col-xs-12 dash-title"><h3>Add Disciple</h3></div>
          <form action="{{ url('/add-disciple') }}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="col-md-6 col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Personal Information</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body" >
                  <div class="col-md-6 col-xs-12">
                    <label for="firstName">First Name</label>
                    <input required type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter first name">
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <label for="lastName">Last Name</label>
                    <input required type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter last name">
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <label for="nickName">Nick Name</label>
                    <input type="text" class="form-control" id="nickName" name="nickName" placeholder="Enter nick name">
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-control">
                      <option value="MALE">MALE</option>
                      <option value="FEMALE">FEMALE</option>
                    </select>
                  </div>
                  <div class="col-xs-12">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <label for="school">School / University</label>
                    <input type="text" class="form-control" id="school" name="school" placeholder="Enter school or university">
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" id="company" name="company" placeholder="If he/she still student type NONE">
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <label for="contactNo">Contact Number</label>
                    <input required type="text" class="form-control" id="contactNo" name="contactNo" placeholder="Enter contact number">
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <label for="phyBirth">Birth Date</label>
                    <input type="date" class="form-control" id="phyBirth" name="phyBirth">
                  </div>
                  <div class="col-md-6 col-xs-12">
                    <label for="cStatus">Civil Status:</label>
                    <select name="cStatus" id="cStatus" class="form-control">
                      <option value="SINGLE">SINGLE</option>
                      <option value="MARRIED">MARRIED</option>
                      <option value="DIVORCED">DIVORCED</option>
                      <option value="WIDOWED">WIDOWED</option>
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
                      <option value="TARGET">VIP</option>
                      <option value="OVE">OVE</option>
                      <option value="PRE ENCOUNTER">PRE ENCOUNTER</option>
                      <option value="ENCOUNTER">ENCOUNTER</option>
                      <option value="POST ENCOUNTER">POST ENCOUNTER</option>
                      <option value="SOL 1">SOL 1</option>
                      <option value="SOL 2">SOL 2</option>
                      <option value="SOL 3">SOL 3</option>
                      <option value="PEPSOL GRADUATE">PEPSOL GRADUATE</option>
                    </select>
                  </div>
                  <div class="col-xs-12">
                    <label for="spiBirth">Spiritual Birth</label>
                    <input type="date" class="form-control" id="spiBirth" name="spiBirth">
                  </div>
                  <div class="col-xs-12">
                    <label for="bapt">Is Baptized?</label>
                    <select name="bapt" id="bapt" class="form-control">
                      <option value="NO">NO</option>
                      <option value="YES">YES</option>
                    </select>
                  </div>
                  <div class="col-xs-12">
                    <label for="isFirstGen">Is First Christian in his/her family?</label>
                    <select name="isFirstGen" id="isFirstGen" class="form-control">
                      <option value="NO">NO</option>
                      <option value="YES">YES</option>
                    </select>
                  </div>
                  <div class="col-xs-12">
                    <label for="spiStatus">Spiritual Status</label>
                    <select name="spiStatus" id="spiStatus" class="form-control">
                      <option value="N/A">N/A</option>
                      <option value="COLD">COLD</option>
                      <option value="ON FIRE">ON FIRE</option>
                      <option value="ON FIRE">NOT YET SOLD OUT</option>
                    </select>
                  </div>
                  <div class="col-xs-12">
                    <label for="cellLeader">Cell Leader</label>
                    <select name="cellLeader" id="cellLeader" class="form-control">
                      @foreach($disciples as $disciple)
                        <option value="{{ $disciple->id }}">{{ $disciple->firstName }} {{ $disciple->lastName }}</option>
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
