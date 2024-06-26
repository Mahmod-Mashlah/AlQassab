<!-- jQuery -->
{{-- <script src="plugins/jquery/jquery.min.js"></script> --}}
{{-- instead of previous code that 👇 --}}
{{-- <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script> --}}
{{-- or --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
{{-- <script src="plugins/jquery-ui/jquery-ui.min.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
{{-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- ChartJS -->
{{-- <script src="plugins/chart.js/Chart.min.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/chart.js/Chart.min.js') }}"></script>

<!-- Sparkline -->
{{-- <script src="plugins/sparklines/sparkline.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/sparklines/sparkline.js') }}"></script>

<!-- JQVMap -->
{{-- <script src="plugins/jqvmap/jquery.vmap.min.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>

{{-- <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

<!-- jQuery Knob Chart -->
{{-- <script src="plugins/jquery-knob/jquery.knob.min.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

<!-- daterangepicker -->
{{-- <script src="plugins/moment/moment.min.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/moment/moment.min.js') }}"></script>

{{-- <script src="plugins/daterangepicker/daterangepicker.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>

<!-- Tempusdominus Bootstrap 4 -->
{{-- <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> --}}
<script type="text/javascript"
    src="{{ URL::asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Summernote -->
{{-- <script src="plugins/summernote/summernote-bs4.min.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>

<!-- overlayScrollbars -->
{{-- <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> --}}
<script type="text/javascript"
    src="{{ URL::asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

<!-- AdminLTE App -->
{{-- <script src="dist/js/adminlte.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/js/adminlte.js') }}"></script>

<!-- AdminLTE for demo purposes -->
{{-- <script src="dist/js/demo.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/js/demo.js') }}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="dist/js/pages/dashboard.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/js/pages/dashboard.js') }}"></script>

@yield('javascript')
{{-- Preloader  --}}
<script>
    // After 0.5 seconds, add the 'loaded' class to the body
    setTimeout(function() {
        document.body.classList.add('loaded');
    }, 500);
</script>

{{-- Yield --}}
@yield('scripts')
