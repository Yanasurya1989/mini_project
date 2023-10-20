@include('backend.layout.header')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('backend.layout.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('backend.layout.navbar')
                <!-- End of Topbar -->

                <div class="container">
                    <!-- Begin Page Content -->
                    @yield('content')
                    <!-- /.container-fluid -->
                </div>

            </div>
            <!-- End of Main Content -->