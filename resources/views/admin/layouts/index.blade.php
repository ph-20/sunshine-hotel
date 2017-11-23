<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Area</title>
    <base href="{{asset('')}}">
    <!-- Core CSS - Include with every page -->
    <link href="AdminTheme/css/bootstrap.min.css" rel="stylesheet">
    <link href="AdminTheme/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="AdminTheme/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="AdminTheme/css/sb-admin.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
{!! Toastr::render() !!}
@include('admin.layouts.header')
<div id="page-wrapper">
    <section class="content-header">
        @yield('content')
    </section>
</div>
<!-- /#wrapper -->

<!-- Core Scripts - Include with every page -->
<script src="AdminTheme/js/jquery-1.10.2.js"></script>
<script src="AdminTheme/js/bootstrap.min.js"></script>
<script src="AdminTheme/js/plugins/metisMenu/jquery.metisMenu.js"></script>

<!-- Page-Level Plugin Scripts - Tables -->
<script src="AdminTheme/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="AdminTheme/js/plugins/dataTables/dataTables.bootstrap.js"></script>

<!-- SB Admin Scripts - Include with every page -->
<script src="AdminTheme/js/sb-admin.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>

</body>

</html>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Start Bootstrap - SB Admin Version 2.0 Demo</title>
    <base href="{{asset('')}}">
    <!-- Core CSS - Include with every page -->
    <link href="AdminTheme/css/bootstrap.min.css" rel="stylesheet">
    <link href="AdminTheme/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="AdminTheme/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="AdminTheme/css/sb-admin.css" rel="stylesheet">

</head>

<body>
@include('admin.layouts.header')
<div id="page-wrapper">
    <section class="content-header">
        @yield('content')
    </section>
</div>
<!-- /#wrapper -->
<!-- Core Scripts - Include with every page -->
<script src="AdminTheme/js/jquery-1.10.2.js"></script>
<script src="AdminTheme/js/bootstrap.min.js"></script>
<script src="AdminTheme/js/plugins/metisMenu/jquery.metisMenu.js"></script>

<!-- Page-Level Plugin Scripts - Tables -->
<script src="AdminTheme/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="AdminTheme/js/plugins/dataTables/dataTables.bootstrap.js"></script>

<!-- SB Admin Scripts - Include with every page -->
<script src="AdminTheme/js/sb-admin.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>

</body>

</html>
