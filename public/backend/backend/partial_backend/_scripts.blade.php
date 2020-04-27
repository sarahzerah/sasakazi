

<!-- jQuery -->
<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js ')}}"></script>
<!-- DataTables -->
<script src="{{asset('/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('/dist/js/demo.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- plugins-->
<script src="{{asset('backend/vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('backend/vendor/jasny-bootstrap/js/jasny-bootstrap.js')}}"></script>
<script src="{{asset('/js/dynamic-form.js')}}"></script>
<script>
$(document).ready(function() {
  $(function () {
    // Summernote
    $('.my-editor').summernote()
  })
$('div.alert').not('.alert-important').delay(5000).fadeOut(350);
$('select').select2({

        theme: "classic",
        width: 'resolve',
        width: '100%'

    });

    $("#datepicker1").datepicker({ changeMonth: true,dateFormat: 'dd/mm/y' });
    $("#datepicker2").datepicker({ changeMonth: true,dateFormat: 'dd/mm/y' });

     $('input').attr('autocomplete','off');

});

  $("#Data_Table").DataTable();
$(function(){
    $("#remove").click(function(){
        $("#table").remove();
    });
});


$(function(){
    $("#add").click(function(){
        $("#table").clone().appendTo("#div1");
    });
});
</script>





