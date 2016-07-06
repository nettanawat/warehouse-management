@extends('master')
@section('title', 'เข้าสู่ระบบ')
@section('content')

        <div class="col-md-12">
            <h3 class="text-center">เข้าสู่ระบบ</h3>
            <form class="col-md-offset-3 col-md-6" role="form" action="/login" method="post">
                {{-- mark as important, csrf is always required--}}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                {{--log in error--}}
                @if (count($errors) > 0)
                    <div class="bs-example bs-example-standalone" data-example-id=dismissible-alert-js>
                        <div class="alert alert-danger alert-dismissible fade in" role=alert>
                            <button type=button class=close data-dismiss=alert aria-label=Close><span aria-hidden=true>&times;</span>
                            </button>
                            <strong>อุ๊ปส์! </strong> อีเมลหรือรหัสผ่านไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง <br>
                            {{--<ul>--}}
                            {{--@foreach ($errors->all() as $error)--}}
                            {{--<li>{{ $error }} </li>--}}
                            {{--@endforeach--}}
                            {{--</ul>--}}
                        </div>
                    </div>
                @endif

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