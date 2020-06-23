<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel=icon href="{{asset('images/favicon.png')}}">

    <title>Gizzabre | @yield('title', 'Administrator')</title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('admin/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- PNotify -->
    <link href="{{ asset('admin/vendors/pnotify/dist/pnotify.css') }}" rel="stylesheet">

    <!-- Datatables -->
    <link href="{{ asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

    <!-- bootstrap-datetimepicker -->
    <link href="{{ asset('admin/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') }}" rel="stylesheet">

    <!-- Summernote -->
    <link href="{{ asset('admin/vendors/summernote-0.8.16-dist/summernote-bs4.min.css') }}" rel="stylesheet">

    <!-- Boostrap Editable -->
    <link href="{{ asset('admin/vendors/bootstrap-editable/css/bootstrap-editable.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin/build/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <!-- sidebar navigation -->
           @include('backend.includes.sidebar')
            <!-- sidebar navigation -->
        </div>

        <!-- top navigation -->
        @include('backend.includes.header')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

            @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('backend.includes.footer')
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('admin/vendors/nprogress/nprogress.js') }}"></script>
<!-- Chart.js -->
<script src="{{ asset('admin/vendors/Chart.js/dist/Chart.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('admin/vendors/iCheck/icheck.min.js') }}"></script>
<!-- Datatables -->
<script src="{{ asset('admin/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
<script src="{{ asset('admin/vendors/jszip/dist/jszip.min.js') }}"></script>
<script src="{{ asset('admin/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('admin/vendors/summernote-0.8.16-dist/popper.min.js') }}"></script>
<script src="{{ asset('admin/vendors/summernote-0.8.16-dist/summernote-bs4.min.js') }}"></script>
<!-- Bootstrap Editable -->
<script src="{{ asset('admin/vendors/bootstrap-editable/js/bootstrap-editable.min.js') }}"></script>
<!-- PNotify -->
<script src="{{ asset('admin/vendors/pnotify/dist/pnotify.js') }}"></script>
<!-- Bootstrap Datetime picker -->
<!-- bootstrap-datetimepicker -->
<script src="{{ asset('admin/vendors/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('admin/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
<!-- Custom Theme Scripts -->
<script src="{{ asset('admin/build/js/custom.min.js') }}"></script>
<script src="{{ asset('admin/build/js/custom-v2.js') }}"></script>

@stack('custom-script')

</body>
</html>
