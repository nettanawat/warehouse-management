@extends('master')
@section('title', 'เพิ่มผู้ขาย')
@section('content')

    <div class="container">
        {{--log in error--}}
        @if (count($errors) > 0)
            <div class="bs-example bs-example-standalone" data-example-id=dismissible-alert-js>
                <div class="alert alert-danger alert-dismissible fade in" role=alert>
                    <button type=button class=close data-dismiss=alert aria-label=Close><span aria-hidden=true>&times;</span>
                    </button>
                    <strong>อุ๊ปส์! </strong> กรุณากรอกข้อมูลให้ถูกต้อง <br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <h2>เพิ่มทะเบียนผู้ขาย</h2>
        <form action="/add-vendor" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">ข้อมูลพื้นฐาน</div>
                <div class="panel-body">
                    <div class="form-group col-md-6">
                        <label>ชื่อผู้ขาย</label>
                        <input type="text" class="form-control" placeholder="เอ็มคอเทียร์" name="name">
                    </div>
                    <div class="form-group col-md-6">
                        <label>อีเมล</label>
                        <input type="email" class="form-control" placeholder="warehouse@gmail.com" name="email">
                    </div>
                    <div class="form-group col-md-6">
                        <label>โทรศัพท์</label>
                        <input type="text" class="form-control" placeholder="053234189" name="phone">
                    </div>
                    <div class="form-group col-md-6">
                        <label>มือถือ</label>
                        <input type="text" class="form-control" placeholder="0882326783" name="cell_phone">
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection