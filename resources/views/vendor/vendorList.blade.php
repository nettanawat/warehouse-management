@extends('master')
@section('title', 'ผู้ขาย')
@section('content')

    <div class="container">
        @if(Session::has('flash_message'))
            <div id="alert" class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
        @endif

        <a href="/add-vendor" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> เพิ่มทะเบียนผู้ขาย</a>
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
            @foreach($vendors as $vendor)
                <tr>
                    <td>{{$vendor->id}}</td>
                    <td>{{$vendor->name}}</td>
                    <td>{{$vendor->email}}</td>
                    <td>{{$vendor->phone}}</td>
                    <td>{{$vendor->cell_phone}}</td>
                    <td>{{$vendor->created_at}}</td>
                    <td>
                        <a href="/vendor/{{$vendor->id}}" class="btn btn-xs btn-info">ดูข้อมูลเพิ่มเติม</a>
                        <a href="/{{$vendor->id}}" class="btn btn-xs btn-warning">แก้ไขข้อมูล</a>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>

@endsection