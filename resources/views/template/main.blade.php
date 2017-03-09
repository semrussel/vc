<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css"  
          href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <link href="{{ url('css/modern-business.css') }}" rel="stylesheet">
    <link href="{{ url('css/jb-printing-admin.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Montserrat">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/r-2.1.0/sc-1.4.2/datatables.min.css"/>

    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>


    <!-- <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    @include('inc/navigation-admin')
    
    @if (!Auth::guest())
        @include('inc/dash-admin')
    @endif
    @yield('content')

    <!-- Footer -->
    <!-- <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <hr style="border: 1px dashed;">
                    <p class="copyright">Copyright © Jimbes Printing 2017</p>
                </div>
            </div>
        </div>
    </footer> -->

    <!-- jQuery -->
    <script src="{{ url('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/jquery.autocomplete.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('js/bootstrap.min.js') }}"></script>

    <!-- CUSTOM Script-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/r-2.1.0/sc-1.4.2/datatables.min.js"></script>


</body>

</html>
