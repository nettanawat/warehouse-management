@extends('master-error')
@section('title', 'Error 404)
@section('content')
    <div class="title">ขออภัยหน้านี้ไม่สามารถใช้งานได้</div>
    <div class="description">ลิงก์ที่คุณอาจจะเสียหรือหน้าอาจถูกลบออก</div><br>
    <a href="/login" class="btn btn-default">เข้าสู่ระบบ</a>
@endsection