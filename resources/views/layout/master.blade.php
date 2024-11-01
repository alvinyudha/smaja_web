<!DOCTYPE html>

<head>
    <title>SMAJA </title>
</head>
@section('body')
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('layout.navbar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            {{-- @include('layouts-current.footer') --}}
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
