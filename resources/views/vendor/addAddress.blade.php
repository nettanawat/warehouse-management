@extends('master')
@section('title', 'เพิ่มที่อยู่ผู้ขาย')
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

        <h2>เพิ่มที่อยู่ผู้ขาย</h2>
        <form action="/add-vendor-address" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">ที่อยู่</div>
                <div class="panel-body">
                    <div class="form-group col-md-6 {{ $errors->has('address_type') ? 'has-error' : ''}}">
                        <label>ประเภทที่อยู่</label>
                        <select class="form-control" name="address_type">
                            <option value="">กรุณาเลือกประเภทที่อยู่</option>
                            @foreach($addressTypes as $addressType)
                                <option value="{{$addressType->id}}">{{$addressType->type_description}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-6 {{ $errors->has('vendor_id') ? 'has-error' : ''}}">
                        <label>ผู้ขาย</label>
                        <select class="form-control" name="vendor_id">
                            <option value="">กรุณาเลือกผู้ขาย</option>
                            @foreach($vendors as $vendor)
                                <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-6 {{ $errors->has('line1') ? 'has-error' : ''}}">
                        <label>เลขที่ 1</label>
                        <input type="text" class="form-control" placeholder="2922/339 ถนน เพชรบุรี, ตำบล ในเมือง" name="line1" value="{{old('line1')}}">
                    </div>
                    {{--<div class="form-group col-md-6">--}}
                    {{--<label>เลขที่ 2</label>--}}
                    {{--<input type="text" class="form-control" name="line2">--}}
                    {{--</div>--}}
                    <div class="form-group col-md-6 {{ $errors->has('city') ? 'has-error' : ''}}">
                        <label>อำเภอ</label>
                        <input type="text" class="form-control" placeholder="เมือง" name="city" value="{{old('city')}}">
                    </div>
                    <div class="form-group col-md-6 {{ $errors->has('province') ? 'has-error' : ''}} ">
                        <label>จังหวัด</label>
                        <select class="form-control" name="province">
                            <option value="">กรุณาเลือกจังหวัด</option>
                            @foreach($provinces as $province)
                                <option value="{{$province}}">{{$province}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6 {{ $errors->has('zip_code') ? 'has-error' : ''}} ">
                        <label>รหัสไปรษณี</label>
                        <input type="text" class="form-control" placeholder="51000" name="zip_code" value="{{old('zip_code')}}">
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