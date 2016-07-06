<!DOCTYPE html>
<html>
<head>
    <title>Permission Denied | WM</title>
    <link rel="shortcut icon" href="{!! asset('resources/images/wm-logo.jpg') !!}" type="image/jpg">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{!! asset('css/bootstrap-3.3.6/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 50px;
        }
        .description {
            font-size: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        @yield('content')
    </div>
</div>
</body>
</html>
