<!-- REQUIRED JS SCRIPTS -->
<script src="{{ asset('/js/app.js') }}"></script>
<script src="{{ url('js/jquery.js') }}"></script>
<script src="{{ url('js/jquery.dataTables.min.js') }}"></script>
<link href="{{ url('css/select2.min.css') }}" rel="stylesheet" />
<script src="{{ url('js/select2.min.js') }} "></script>
<script src="{{ url('js/bootstrap.min.js') }} "></script>

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->



<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
<script type="text/javascript">
	$(document).ready(function() {
    var table = $('#disciple-table').DataTable().order( [ 0, 'desc' ] ).draw();
    @if ($active == 'sunday')
      table.order( [ 1, 'desc' ] ).draw();
    @endif
    $('#request-table').DataTable();
  } );
</script>

