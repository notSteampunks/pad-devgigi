<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Purchase: https://1.envato.market/nobleui_admin
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/core/core.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/select2/select2.min.css')}}">
    <!-- endinject -->
    <link rel="stylesheet" href="{{asset('assets/swal/sweetalert.css')}}">
    <script src="{{asset('assets/swal/sweetalert.js')}}"></script>
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('assets/vendors/prismjs/themes/prism.css')}}">
    
    <!-- select 2 -->
    <link href="{{asset('select2/dist/css/select2.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('select2/dist/css/select2-bootstrap4.min.css')}}">

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/jquery-steps/jquery.steps.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <!-- endinject -->
    <link rel="stylesheet" href="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/demo1/style.css')}}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />



</head>

<body>
    <div class="main-wrapper">
        @include('sweetalert::alert')
        <!-- partial:partials/_sidebar.html -->
        @include('layout.sidebar')
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            @include('layout.navbar')
            <!-- partial -->

            <div class="page-content">
                @yield('content')
            </div>

            <!-- partial:partials/_footer.html -->
            @include('layout.footer')
            <!-- partial -->

        </div>
    </div>

    <!-- core:js -->

    <script src="{{asset('assets/vendors/core/core.js')}}"></script>

    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="{{asset('assets/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
    <!-- End plugin js for this page -->

    <script src="{{asset('assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-steps/jquery.steps.min.js')}}"></script>
    <script src="{{asset('assets/vendors/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/js/select2.js')}}"></script>
	<script src="{{asset('assets/vendors/prismjs/prism.js')}}"></script>
	<script src="{{asset('assets/vendors/clipboard/clipboard.min.js')}}"></script>

    <!-- inject:js -->
    <script src="{{asset('assets/vendors/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/template.js')}}"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="{{asset('select2/dist/js/select2.min.js')}}"></script>

    <script src="{{asset('assets/js/dashboard-light.js')}}"></script>
    <script src="{{asset('assets/js/datepicker.js')}}"></script>
    <!-- Grafik -->
    <script src="{{asset('assets/vendors/jquery.flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery.flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('assets/js/jquery.flot-light.js')}}"></script>
    <script src="{{asset('assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('#dataTableExample').DataTable();
        });

    </script>

    <script>
        $("#wizard").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            autoFocus: true,
            labels: {
                finish: "Submit",
                next: "Lanjut",
                previous: "Kembali"
            },
            onStepChanged:function(event, currentIndex, newIndex){
                console.log("Step changed to: " + currentIndex);

                if(currentIndex == 0){
                    document.getElementById("keterangan").style.display = "";
                }else{
                    document.getElementById("keterangan").style.display = "none";
                }
                return true;
            },
        });

    </script>


    <!-- End custom js for this page -->
    @stack('after-script')

</body>

</html>
