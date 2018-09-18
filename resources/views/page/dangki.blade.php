<?php
/**
 * Created by PhpStorm.
 * User: 8470p
 * Date: 9/5/2018
 * Time: 12:38 PM
 */
?>
@extends('master')
@section('content')

<div class="login">
    <div class="container">
        <div class="login-title">
            <a href="{{route('trang-chu')}}">Trang chủ</a>
            <span>/</span>
            <span>Tài khoản</span>
        </div>
        <div class="grid">
            <form accept-charset="UTF-8" action="{{route('signin')}}" id="customer_login" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input name="form_type" value="customer_login" type="hidden">
                <input name="utf8" value="✓" type="hidden">
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}
                        @endforeach
                    </div>
                @endif

                @if(Session::has('thanhcong'))
                    <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                @endif
                <h3>Đăng kí</h3>
                <input name="email" id="CustomerEmail" class="input-full" placeholder="Email" autocorrect="off" autocapitalize="off" autofocus="" type="email" required>
                <input name="fullname" id="CustomerEmail" class="input-full" placeholder="Họ tên" autocorrect="off" autocapitalize="off" autofocus="" type="text" required>
                <input name="address" id="CustomerEmail" class="input-full" placeholder="Địa chỉ" autocorrect="off" autocapitalize="off" autofocus="" type="text" required>
                <input name="phone" id="CustomerEmail" class="input-full" placeholder="Số điện thoại" autocorrect="off" autocapitalize="off" autofocus="" type="text" required>
                <input value="" name="password" id="CustomerPassword" class="input-full" placeholder="Mật khẩu" type="password" required>
                <input value="" name="re_password" id="re_Password" class="input-full" placeholder="Nhập lại mật khẩu" type="password" required>
                <p>
                    <input class="btn btn--full" value="Đăng kí" type="submit">
                </p>
                <p><a id="cancel-back-to-home" href="{{route('dangnhap')}}">Đăng nhập</a></p>
                <p><a href="{{route('trang-chu')}}" id="customer_register_link">Trở về</a></p>
            </form>
        </div>
    </div>
</div>
@endsection