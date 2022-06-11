<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
{{-- <script src="{{asset('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script> --}}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
{{-- <script>
  $.widget.bridge('uibutton', $.ui.button)
</script> --}}
<!-- Bootstrap 4 -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<!-- ChartJS -->
{{-- <script src="{{asset('backend/plugins/chart.js/Chart.min.js')}}"></script> --}}
<!-- Sparkline -->
{{-- <script src="{{asset('backend/plugins/sparklines/sparkline.j')}}s"></script> --}}
<!-- JQVMap -->
{{-- <script src="{{asset('backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script> --}}
{{-- <script src="{{asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script> --}}
<!-- jQuery Knob Chart -->
{{-- <script src="{{asset('backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script> --}}
<!-- daterangepicker -->
{{-- <script src="{{asset('backend/plugins/moment/moment.min.js')}}"></script> --}}
{{-- <script src="{{asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script> --}}
<!-- Tempusdominus Bootstrap 4 -->
{{-- <script src="{{asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
--}}
<!-- Summernote -->
{{-- <script src="{{asset('backend/plugins/summernote/summernote-bs4.min.js')}}"></script> --}}
<!-- overlayScrollbars -->
{{-- <script src="{{asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script> --}}
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{asset('backend/dist/js/pages/dashboard.js')}}"></script> --}}
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('backend/dist/js/demo.js')}}"></script> --}}
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
  CKEDITOR.replace( 'editor2' );
  CKEDITOR.replace( 'editor3' );
  $('#dtable').dataTable();
  // $('#datepicker').daterangepicker({
  //     singleDatePicker: true,
  //     showDropdowns: true,
  //     minYear: 1901,
  //     maxYear: parseInt(moment().format('YYYY'),10),
  //     locale: {
  //         format: 'DD-MM-YYYY'
  //     }
  // })
</script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('backend/dropzone.min.js') }}"></script>
<script src="{{ asset('backend/dropzone-script.js') }}"></script>
<script>
    $( function() {
    $( "#datepicker1" ).datepicker({
        dateFormat: 'yy-mm-dd',
      changeMonth: true,
      changeYear: true
    });
  } );
</script>

@yield('after-script')
