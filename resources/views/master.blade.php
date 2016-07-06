<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Warehouse Management</title>
    <link rel="shortcut icon" href="{!! asset('resources/images/wm-logo.jpg') !!}" type="image/jpg">
    <link href="{!! asset('css/bootstrap-3.3.6/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{!! asset('css/font-awesome-4.5.0/css/font-awesome.min.css')!!}">
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet" type="text/css">
</head>
<body>
@include('menu')
<div class="container-fluid default-background">
    @yield('content')
</div>
<div style="height: 4em">

</div>
<div style="bottom: 0px; position: fixed;" class="col-md-12">
    <p class="text-center">Copyright © Tanawat Sitthitan 2016 All rights reserved</p>
</div>
<script type="text/javascript" src="{!! asset('js/jquery.js') !!}"></script>
<script type="text/javascript" src="{!! asset('css/bootstrap-3.3.6/js/bootstrap.min.js') !!}"></script>
<script>

    $(function() {
        $("li").click(function() {
            // remove classes from all
            $("li").removeClass("active");
            // add class to the one we clicked
            $(this).addClass("active");
        });
    });


    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn(0);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut(0);
    });
</script>
</body>
</html>