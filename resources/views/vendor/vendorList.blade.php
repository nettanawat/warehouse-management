@extends('master')
@section('title', 'ผู้ขาย')
@section('content')

    <div class="container">
        <a href="/add-vendor" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> เพิ่มลูกค้า</a>
        <table style="margin-top: 20px;" class="table table-condensed table-hover col-md-12">
            <tr>
                <th>#</th>
                <th>ชื่อผู้ขาย</th>
                <th>อีเมล</th>
                <th>โทรศัพท์</th>
                <th>มือถือ</th>
                <th>สร้างเมื่อ</th>
                <th>จัดการ</th>
            </tr>
            <tr>
                <td>1</td>
                <td>วีอาร์ เชียงใหม่</td>
                <td>vr@gmail.com</td>
                <td>053223333</td>
                <td>0882532323</td>
                <td>-</td>
                <td>
                    <a href="#" class="btn btn-xs btn-info">ดูข้อมูลเพิ่มเติม</a>
                    <a href="#" class="btn btn-xs btn-warning">แก้ไขข้อมูล</a>
                </td>
            </tr>
        </table>
    </div>

@endsection