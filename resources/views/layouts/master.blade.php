<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Evaluasi SPBE</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}" />
    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/core/libs.min.css') }}" />
    <!-- Aos Animation Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/aos/dist/aos.css') }}" />
    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/hope-ui.min.css?v=1.1.0') }}" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.min.css?v=1.1.0') }}" />
    <!-- Dark Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/assets/css/dark.min.css') }}" />
    <!-- RTL Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/rtl.min.css') }}" />
    <!-- Fullcalender CSS -->
    <link rel='stylesheet' href="{{ asset('admin/assets/vendor/fullcalendar/core/main.css') }}" />
    <link rel='stylesheet' href="{{ asset('admin/assets/vendor/fullcalendar/daygrid/main.css') }}" />
    <link rel='stylesheet' href="{{ asset('admin/assets/vendor/fullcalendar/timegrid/main.css') }}" />
    <link rel='stylesheet' href="{{ asset('admin/assets/vendor/fullcalendar/list/main.css') }}" />


    <!-- <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}"/>  -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />


    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR-API-KEY"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/js/jquery.googlemap.js') }}"></script>

</head>

<body class="  ">
    <aside class="sidebar sidebar-default navs-rounded-all ">
        @include('layouts.includes._sidebar')
    </aside>
    <main class="main-content">
        <div class="position-relative">
            <!--Nav Start-->
            @include('layouts.includes._navbar')
            <!--Nav End-->
        </div>
        <!--Main-->
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            @yield('content')
        </div>
        <!--Main End-->

        <!-- Footer Section Start -->
        <footer class="footer">
            <div class="footer-body">
                <ul class="left-panel list-inline mb-0 py-0">
                </ul>
                <div class="right-panel">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> DISKOMINFO SP, Kota Surakarta
                    <span class="text-gray">
                        <svg width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z"
                                fill="currentColor"></path>
                        </svg>
                    </span> by <a href="https://iqonic.design/">IQONIC Design</a>.
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Library Bundle Script -->
        <script src="{{ asset('admin/assets/js/core/libs.min.js') }}"></script>
        <!-- External Library Bundle Script -->
        <script src="{{ asset('admin/assets/js/core/external.min.js') }}"></script>
        <!-- Widgetchart Script -->
        <script src="{{ asset('admin/assets/js/charts/widgetcharts.js') }}"></script>
        <!-- mapchart Script -->
        <script src="{{ asset('admin/assets/js/charts/vectore-chart.js') }}"></script>
        <script src="{{ asset('admin/assets/js/charts/dashboard.js') }}" defer></script>
        <!-- fslightbox Script -->
        <script src="{{ asset('admin/assets/js/plugins/fslightbox.js') }}"></script>
        <!-- Settings Script -->
        <script src="{{ asset('admin/assets/js/plugins/setting.js') }}"></script>
        <!-- Form Wizard Script -->
        <script src="{{ asset('admin/assets/js/plugins/form-wizard.js') }}"></script>
        <!-- AOS Animation Plugin-->
        <script src="{{ asset('admin/assets/vendor/aos/dist/aos.js') }}"></script>
        <!-- App Script -->
        <script src="{{ asset('admin/assets/js/hope-ui.js') }}" defer></script>
        <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>

        <!-- Fullcalender Javascript -->
        <script src="{{ asset('admin/assets/vendor/fullcalendar/core/main.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/fullcalendar/daygrid/main.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/fullcalendar/timegrid/main.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/fullcalendar/list/main.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/fullcalendar/interaction/main.js') }}"></script>
        <script src="{{ asset('admin/assets/vendor/moment.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/plugins/calender.js') }}"></script>

        <!--
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
    
    <script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    Table Fixed Header
    <script src="{{ asset('admin/assets/Table_Fixed_Header/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('admin/assets/Table_Fixed_Header/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('admin/assets/Table_Fixed_Header/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('admin/assets/Table_Fixed_Header/vendor/select2/select2.min.js') }}"></script>

    <script src="{{ asset('admin/assets/Table_Fixed_Header/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}">
    </script>

    <script src="{{ asset('admin/assets/Table_Fixed_Header/js/main.js') }}"></script>
    
    -->
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @stack('scripts')
</body>

</html>
