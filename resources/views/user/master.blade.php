<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("assets/admin/css/all.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset("assets/admin/css/tempusdominus-bootstrap-4.min.css")}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset("assets/admin/css/icheck-bootstrap.min.css")}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset("assets/admin/css/jqvmap.min.css")}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset("assets/admin/css/OverlayScrollbars.min.css")}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset("assets/admin/css/daterangepicker.css")}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset("assets/admin/css/summernote-bs4.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/admin/css/dataTables.bootstrap4.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/admin/css/responsive.bootstrap4.min.css")}}">
  <link rel="stylesheet" href="{{asset("assets/admin/css/buttons.bootstrap4.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/admin/css/adminlte.min.css")}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Navbar -->
    @include('user.includes.nav')
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    @include('user.includes.sidebar')
    <!-- /.Main Sidebar Container -->
    <!-- Content Wrapper -->
    @yield('body')
    <!-- /.content-wrapper -->
    <!-- footer section -->
    @include('user.includes.footer')
    <!-- /.footer section -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset("assets/admin/js/jquery.min.js")}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset("assets/admin/js/jquery-ui.min.js")}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset("assets/admin/js/bootstrap.bundle.min.js")}}"></script>
<!-- ChartJS -->
<script src="{{asset("assets/admin/js/Chart.min.js")}}"></script>
<!-- Sparkline -->
{{-- <script src="{{asset("assets/admin/js/sparkline.js")}}"></script> --}}
<!-- JQVMap -->
<script src="{{asset("assets/admin/js/jquery.vmap.min.js")}}"></script>
<script src="{{asset("assets/admin/js/jquery.vmap.usa.js")}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset("assets/admin/js/jquery.knob.min.js")}}"></script>
<!-- daterangepicker -->
<script src="{{asset("assets/admin/js/moment.min.js")}}"></script>
<script src="{{asset("assets/admin/js/daterangepicker.js")}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset("assets/admin/js/tempusdominus-bootstrap-4.min.js")}}"></script>
<!-- Summernote -->
<script src="{{asset("assets/admin/js/summernote-bs4.min.js")}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset("assets/admin/js/jquery.overlayScrollbars.min.js")}}"></script>
<script src="{{asset("assets/admin/js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("assets/admin/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("assets/admin/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("assets/admin/js/responsive.bootstrap4.min.js")}}"></script>
<script src="{{asset("assets/admin/js/dataTables.buttons.min.js")}}"></script>
<script src="{{asset("assets/admin/js/buttons.bootstrap4.min.js")}}"></script>
<script src="{{asset("assets/admin/js/jszip.min.js")}}"></script>
<script src="{{asset("assets/admin/js/pdfmake.min.js")}}"></script>
<script src="{{asset("assets/admin/js/vfs_fonts.js")}}"></script>
<script src="{{asset("assets/admin/js/buttons.html5.min.js")}}"></script>
<script src="{{asset("assets/admin/js/buttons.print.min.js")}}"></script>
<script src="{{asset("assets/admin/js/buttons.colVis.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/admin/js/adminlte.js")}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{asset("assets/admin/js/dashboard.js")}}"></script> --}}
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
