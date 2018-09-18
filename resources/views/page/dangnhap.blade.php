<?php
/**
 * Created by PhpStorm.
 * User: 8470p
 * Date: 9/5/2018
 * Time: 12:39 PM
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
            <form accept-charset="UTF-8" action="{{route('dangnhap')}}" id="customer_login" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input name="form_type" value="customer_login" type="hidden">
                <input name="utf8" value="✓" type="hidden">
                @if(Session::has('flag'))
                    <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                @endif
                <h3>Đăng nhập</h3>
                <input name="email" id="CustomerEmail" class="input-full" placeholder="Email" autocorrect="off" autocapitalize="off" autofocus="" type="email">
                <input value="" name="password" id="CustomerPassword" class="input-full" placeholder="Mật khẩu" type="password">
                <p>
                    <input class="btn btn--full" value="Đăng nhập" type="submit">
                </p>
                <p><a id="cancel-back-to-home" href="{{route('trang-chu')}}">Trở về</a></p>
                <p><a href="{{route('signin')}}" id="customer_register_link">Đăng kí</a></p>
                <p><a href="#" id="RecoverPassword">Quên mật khẩu?</a></p>
            </form>
        </div>
    </div>
</div>
@endsection