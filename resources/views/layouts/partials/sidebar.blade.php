<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li @if($active == 'dashboard') class="active" @endif><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="treeview  @if($active == 'sunday' || $active == 'cell' || $active == 'post encounter' || $active == 'sol1' || $active == 'sol2' || $active == 'sol3') active @endif">
                <a href="#"><i class='fa fa-list-ol'></i> <span> Attendance </span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li @if($active == 'sunday') class="active" @endif><a href="{{ url('attendance/sunday-service') }}"> <i class='fa fa-sun-o'></i> Sunday Service </a></li>
                    <li @if($active == 'cell') class="active" @endif><a href="{{ url('attendance/cell') }}"> <i class='fa fa-contao'></i> Cell Group </a></li>
                    <li @if($active == 'post encounter') class="active" @endif><a href="{{ url('attendance/process/post encounter') }}"> <i class='fa fa-thermometer-quarter'></i> Post Encounter </a></li>
                    <li @if($active == 'sol1') class="active" @endif><a href="{{ url('attendance/process/sol1') }}"> <i class='fa fa-thermometer-half'></i> SOL1 </a></li>
                    <li @if($active == 'sol2') class="active" @endif><a href="{{ url('attendance/process/sol2') }}"> <i class='fa fa-thermometer-three-quarters'></i> SOL2 </a></li>
                    <li @if($active == 'sol3') class="active" @endif><a href="{{ url('attendance/process/sol3') }}"> <i class='fa fa-thermometer-full'></i> SOL3 </a></li>

                </ul>
            </li>
            <li @if($active == 'batch') class="active" @endif><a href="{{ url('/batch') }}"><i class="fa fa-users"></i> <span>Batch</span></a></li>
            <li @if($active == 'disciples') class="active" @endif><a href="{{ url('/disciples') }}"><i class='fa fa-child'></i> <span>Disciples</span></a></li>
            <li @if($active == 'connections') class="active" @endif><a href="{{ url('/connections') }}"><i class='fa fa-link'></i> <span>Connections</span></a></li>
            <li @if($active == 'events') class="active" @endif><a href="{{ url('/events') }}"><i class='fa fa-calendar'></i> <span>Events</span></a></li>
            <li @if($active == 'finance') class="active" @endif><a href="{{ url('/finance') }}"><i class='fa fa-money'></i> <span>Finances</span></a></li>
            
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
