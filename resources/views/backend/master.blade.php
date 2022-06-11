<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ config('app.name') }}</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Font Awesome -->
        @include('backend.partial.css')

    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Navbar -->
            @include('backend.partial.header')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('backend.partial.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <!-- /.content-header -->

                <!-- Main content -->
                @yield('main-content')
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Copyright &copy; {{ \Carbon\Carbon::now()->format('Y') }} <a
                        href="{{ config('app.siteurl') }}">{{ config('app.name') }}</a>.</strong>
                All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        @include('backend.partial.script')
    </body>

</html>
