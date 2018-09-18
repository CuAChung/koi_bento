<?php
/**
 * Created by PhpStorm.
 * User: 8470p
 * Date: 9/9/2018
 * Time: 8:41 AM
 */
?>
@extends('master')

@section('content')

    <div class="login">
        <div class="container">
            <div class="login-title">
                <a href="#">Trang chủ</a>
                <span>/</span>
                <span>Tài khoản</span>
            </div>
            <div class="grid">
                <form accept-charset="UTF-8" action="#" id="customer_login" method="post">
                    <input name="form_type" value="customer_login" type="hidden">
                    <input name="utf8" value="✓" type="hidden">
                    <h3>Cài đặt lại mật khẩu</h3>
                    <input name="customer[email]" id="CustomerEmail" class="input-full" placeholder="Email"
                           type="email">
                    <p>
                        <input class="btn btn--full" value="Gửi" type="submit">
                    </p>
                    <p><a id="cancel-back-to-home" href="#">Trở về</a></p>
                </form>
            </div>
        </div>
    </div>

    @endsection
