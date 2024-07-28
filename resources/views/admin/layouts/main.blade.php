<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLTE v4 | Dashboard</title>
    <!-- Primary Meta Tags -->
    <meta name="title" content="AdminLTE v4 | Dashboard">
    <meta name="author" content="ColorlibHQ">
    <meta name="description"
          content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords"
          content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
          integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous">
    <!-- Third Party Plugin(OverlayScrollbars) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css"
          integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous">
    <!-- Third Party Plugin(Bootstrap Icons) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css"
          integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">
    <!-- Required Plugin(AdminLTE) -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}">
    <!-- ApexCharts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
          integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous">
    <!-- jsVectorMap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
          integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous">
    <!-- Summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs5.css" rel="stylesheet">
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<!-- App Wrapper -->
<div class="app-wrapper">
    <!-- Header -->
    <nav class="app-header navbar navbar-expand bg-body d-flex justify-content-between">
        <!-- Container -->
        <div class="container-fluid">
            <!-- Start Navbar Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                        <i class="bi bi-list"></i>
                    </a>
                </li>
            </ul>
            <div class="d-flex ms-auto">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input class="btn btn-outline-primary" type="submit" value="Выйти">
                </form>
                <form class="ms-2" action="{{ route('login') }}" method="POST">
                    @csrf
                    <input class="btn btn-primary" type="submit" value="Войти">
                </form>
            </div>
            <!-- End Navbar Links -->

            <!-- Login Button -->

        </div>
        <!-- End Container -->
    </nav>

    <!-- End Header -->
    <!-- Sidebar -->
    @include('admin.includes.sidebar')
    @yield('content')
    <!-- End Sidebar -->
    <footer class="app-footer">
        <!-- To the end -->
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <!-- End To the end -->
        <!-- Copyright -->
        <strong>
            Copyright &copy; 2014-2024
            <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
        </strong>
        All rights reserved.
        <!-- End Copyright -->
    </footer>
    <!-- End Footer -->
</div>
<!-- End App Wrapper -->
<!-- Scripts -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Third Party Plugin(OverlayScrollbars) -->
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js"
        integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script>
<!-- Required Plugin(popperjs for Bootstrap 5) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script>
<!-- Required Plugin(Bootstrap 5) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script>
<!-- Required Plugin(AdminLTE) -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<script src="{{ asset('bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- Summernote -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $(function () {
            bsCustomFileInput.init();
        });
        $('.select2').select2();
    });
</script>
<!-- Optional scripts -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
        integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script>
<script>
    const connectedSortables = document.querySelectorAll(".connectedSortable");
    connectedSortables.forEach((connectedSortable) => {
        let sortable = new Sortable(connectedSortable, {
            group: "shared",
            handle: ".card-header",
        });
    });
    const cardHeaders = document.querySelectorAll(".connectedSortable .card-header");
    cardHeaders.forEach((cardHeader) => {
        cardHeader.style.cursor = "move";
    });
</script>
<!-- ApexCharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
        integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script>
<script>
    const sales_chart_options = {
        series: [{
            name: "Digital Goods",
            data: [28, 48, 40, 19, 86, 27, 90],
        },
            {
                name: "Electronics",
                data: [65, 59, 80, 81, 56, 55, 40],
            },
        ],
        chart: {
            height: 300,
            type: "area",
            toolbar: {
                show: false,
            },
        },
        legend: {
            show: false,
        },
        colors: ["#0d6efd", "#20c997"],
        dataLabels: {
            enabled: false,
        },
        stroke: {
            curve: "smooth",
        },
        xaxis: {
            type: "datetime",
            categories: [
                "2023-01-01",
                "2023-02-01",
                "2023-03-01",
                "2023-04-01",
                "2023-05-01",
                "2023-06-01",
                "2023-07-01",
            ],
        },
        tooltip: {
            x: {
                format: "MMMM yyyy",
            },
        },
    };
    const sales_chart = new ApexCharts(document.querySelector("#revenue-chart"), sales_chart_options);
    sales_chart.render();
</script>
<!-- jsVectorMap -->
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"></script>
<script>
    const map = new jsVectorMap({
        map: "world",
        selector: "#world-map",
        zoomButtons: true,
    });
</script>
</body>

</html>
