@extends('master')
@section('title', 'เข้าสู่ระบบ')
@section('content')

        @if (count($errors) > 0)
            <div>
                <strong>Whoops! </strong> There were some problems with your input. <br> <br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-12">
            <h3 class="text-center">เข้าสู่ระบบ</h3>
            <form class="col-md-offset-3 col-md-6" role="form" action="/login" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="exampleInputEmail1">ที่อยู่อีเมล</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="warehouse@gmail.com" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">รหัสผ่าน</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="form-group text-right">
                    <input type="submit" class="btn btn-default" name="loginBtn" value="เข้าสู่ระบบ">
                </div>
            </form>
        </div>

@endsection