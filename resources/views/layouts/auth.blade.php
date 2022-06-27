<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('main-title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/template/vendors/feather/feather.css">
    <link rel="stylesheet" href="/template//vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/template//vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/template/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="/template/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/template/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/template/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="/template/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        @yield('content')
    </div>
    <script src="/template/vendors/js/vendor.bundle.base.js"></script>
    <script src="/template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/template/js/off-canvas.js"></script>
    <script src="/template/js/hoverable-collapse.js"></script>
    <script src="/template/js/template.js"></script>
    <script src="/template/js/settings.js"></script>
    <script src="/template/js/todolist.js"></script>
</body>

</html>