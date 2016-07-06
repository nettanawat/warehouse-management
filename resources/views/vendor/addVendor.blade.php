@extends('master')
@section('title', 'เพิ่มผู้ขาย')
@section('content')

    <div class="container">
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
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">ที่อยู่</div>
                <div class="panel-body">
                    <div class="form-group col-md-6">
                        <label>เลขที่ 1</label>
                        <input type="text" class="form-control" placeholder="2922/339 ถนน เพชรบุรี, ตำบล ในเมือง" name="line1">
                    </div>
                    <div class="form-group col-md-6">
                        <label>เลขที่ 2</label>
                        <input type="text" class="form-control" name="line2">
                    </div>
                    <div class="form-group col-md-6">
                        <label>อำเภอ</label>
                        <input type="text" class="form-control" placeholder="เมือง" name="city">
                    </div>
                    <div class="form-group col-md-6">
                        <label>จังหวัด</label>
                        <select class="form-control" name="province">
                            <option>กรุณาเลือกจังหวัด</option>
                            @foreach($provinces as $province)
                                <option value="{{$province}}">{{$province}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>รหัสไปรษณี</label>
                        <input type="text" class="form-control" placeholder="51000" name="zip_code">
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> บันทึก</button>
                        <a href="/vendor" class="btn btn-default">กลับ</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection