<!-- REQUIRED JS SCRIPTS -->
<script src="{{ url('js/bootstrap.min.js') }} "></script>
<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->

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
        $('#disciple-table').DataTable();
        $('#request-table').DataTable();
    } );
</script>