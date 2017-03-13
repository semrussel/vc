@extends('template.main')

@section('content')
<div class="col-md-10 col-md-offset-2 dash-main">

    <div class="row">
        <div class="col-xs-12">

            <p class="col-xs-10 dash-title"><b>Disciples</b></p>
            <p class="col-xs-2 dash-title" style="margin-top: 10px;">
                <a class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add</a>
            </p>

            <div class="col-xs-12">
                <table id="disciple-table" class="table table-bordered admin-table" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Disciple ID</th>
                            <th>Full Name</th>
                            <th>Nick Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0; $i<15; $i++)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>

        </div>

    </div><!-- /.row -->

</div>

@endsection
