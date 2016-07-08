@if(Auth::user())
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">โปรแกรมจัดการคลังสินค้า </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    {{--ผู้ขาย--}}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ผู้ขาย <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/add-vendor"><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่มทะเบียนผู้ขาย</a></li>
                            <li><a href="/add-vendor-address"><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่มที่อยู่ผู้ขาย</a></li>
                            <li><a href="/vendor-report"><i class="fa fa-area-chart" aria-hidden="true"></i> ดูภาพรวมผู้ขาย</a></li>
                        </ul>
                    </li>
                    {{--สินค้า--}}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">สินค้า <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">ประเภทสินค้าหลัก</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">ประเภทสินค้าย่อย</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">สินค้า</a></li>
                        </ul>
                    </li>

                    {{--บัญชี--}}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">บัญชี <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>


                    {{--บุคลากร--}}
                    <li><a href="#">บุคลากร <span class="sr-only">(current)</span></a></li>

                    {{--ลูกค้า--}}
                    <li><a href="#">ลูกค้า <span class="sr-only">(current)</span></a></li>

                    {{--ใบเสร็จ--}}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ใบเสร็จรับเงิน <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">สร้างใบเสร็จ</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>

                    {{--โครงการ--}}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">โครงการ <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>

                {{--right side--}}
                <ul class="nav navbar-nav navbar-right">
                    <li><a style="color: darkorange" href="#"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> (5)</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            {{Auth::user()->name}}
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/logout"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> ออกจากระบบ</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    @else

    <nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand">โปรแกรมจัดการคลังสินค้า</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
        </div><!-- /.container-fluid -->
    </nav>
@endif
