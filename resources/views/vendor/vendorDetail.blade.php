@extends('master')
@section('title', $vendor->name)
@section('content')

    <div class="container">
        <h1>{{$vendor->name}}</h1>
        <hr>
        <div class="col-md-6">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <i class="fa fa-info" aria-hidden="true"></i> ข้อมูลพื้นฐาน
                </div>
                <div class="panel-body">

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <i class="fa fa-home" aria-hidden="true"></i> ข้อมูลที่อยู่
                </div>
                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>

@endsection