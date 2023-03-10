<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="utf-8">
    <title>Dashboard | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.ico">
    <!-- Filepond css -->
<link rel="stylesheet" href="admin/assets/libs/filepond/filepond.min.css" type="text/css" />
<link rel="stylesheet" href="admin/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
    <!-- third party css -->
    <link href="admin/assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
    <!-- App css -->
    <link href="admin/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="admin/assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link href="admin/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">

    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/mask@3.11.1/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.1/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    @yield('styles')
    @livewireStyles
</head>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.layouts.left-sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                @include('admin.layouts.navbar')
                <!-- end Topbar -->

                <!-- Start Content-->
                @yield('content')
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Hyper - Coderthemes.com
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->

    <!-- /End-bar -->

    <!-- bundle -->
    <script src="admin/assets/js/vendor.min.js"></script>
    <script src="admin/assets/js/app.min.js"></script>

    <!-- third party js -->
    <script src="admin/assets/js/vendor/apexcharts.min.js"></script>
    <script src="admin/assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="admin/assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="admin/assets/js/pages/demo.dashboard.js"></script>
    <!-- end demo js-->
    <script src="admin/assets/js/jquery.min.js"></script>
    <!-- filepond js -->
    <script src="admin/assets/libs/filepond/filepond-plugin-file-validate-type.js"></script>
    <script src="admin/assets/libs/filepond/filepond.min.js"></script>
    <script src="admin/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
    <script src="admin/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js">
    </script>
    <script
        src="admin/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js">
    </script>
    <script src="admin/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>


    @yield('scripts')

    @livewireScripts
</body>

</html>
