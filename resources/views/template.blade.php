<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin Panel | Web Service</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Aplikasi Web Services">
    <meta name="author" content="Syifa Nurinayah" />
    
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">  
    <link href="{{ asset('assets/plugins/font-awesome-4.6.3/css/font-awesome.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/dataTables.bootstrap.css')}}">
     <link rel="stylesheet" href="{{ asset('assets/plugins/datepicker/datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/chosen/css/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/AdminLTE.min.css')}}" >
    <link rel="stylesheet" href="{{ asset('assets/css/skins/skin-blue.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('assets/plugins/datepicker/datepicker.min.css') }}">
    <link href="{{ asset('assets/plugins/datepicker/datepicker3.css') }}">
   

</head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">  
    @include('header') 
    @yield('content')
    @include('sidebar')
    </div>

    <script src="{{ asset('assets/plugins/jQuery/jQuery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>    
    <script src="{{ asset('assets/plugins/chosen/js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
    <script src="{{ asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')}}" ></script>
    <script src="{{ asset('assets/plugins/datepicker/bootstrap-datepicker.min.js')}}" ></script>
    <script src="{{ asset('assets/plugins/fastclick/fastclick.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.maskMoney.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script> 
    <script src="{{ asset('assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/datepicker/bootstrap-datepicker.min.js') }}"></script>

    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        // datepicker plugin
        $('.date-picker').datepicker({
          autoclose: true,
          todayHighlight: true
        });
    </script>
    
</body>

</html>