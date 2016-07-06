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
<div class="col-md-12 footer">
    <a style="text-decoration: none;" class="pull-left footer-button" data-toggle="modal"
       data-target=".bs-example-modal-sm">
        <i class="fa fa-phone" aria-hidden="true"></i> ติดต่อสอบถาม
    </a>
    <p class="text-center footer-content pull-right">Copyright © Tanawat Sitthitan 2016 All rights reserved</p>
</div>


    <!-- Modal -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-info-circle" aria-hidden="true"></i>
                        ติดต่อสอบถาม</h4>
                </div>
                <div class="modal-body" style="text-align: center">
                    <i class="fa fa-mobile-phone fa-2x" aria-hidden="true"></i>
                    <p>088-253-7135</p>
                    <p>ธนวัฒน์ สิทธิตัน</p>
                    <hr>
                    <i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>
                    <p>nettanawat@gmail.com</p>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{!! asset('js/jquery.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('css/bootstrap-3.3.6/js/bootstrap.min.js') !!}"></script>
    <script>

        $(function () {
            $("li").click(function () {
                // remove classes from all
                $("li").removeClass("active");
                // add class to the one we clicked
                $(this).addClass("active");
            });
        });


        $('ul.nav li.dropdown').hover(function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn(0);
        }, function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut(0);
        });
    </script>
</body>
</html>