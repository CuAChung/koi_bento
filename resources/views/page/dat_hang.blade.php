<?php
/**
 * Created by PhpStorm.
 * User: 8470p
 * Date: 9/6/2018
 * Time: 11:54 PM
 */
?>
@extends('master')
@section('content')

<div class="login">
    <div class="page-cart">
        <div class="container">
            <ul>
                <li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
                <li><span>Đặt hàng</span></li>
            </ul>
        </div>
    </div>
    <div class="ckeck_out">
        <div class="container content-production">
            <h3>Đặt hàng</h3>
            <div class="checkout-area">
                <div class="">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="coupne-customer-area mb50">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-checkout">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title"> <img src="images/caret-right-solid.svg" alt="" style="width: 10px;;"> Phản hồi khách hàng? <a class="collapsed" role="button" href="{{route('dangnhap')}}" >  Nhấn vào đây để đăng nhập </a> </h4>
                                        </div>

                                    </div>
                                    <div class="panel panel-checkout">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title"> <img src="images/caret-right-solid.svg" alt="" style="width: 10px;;"> Có phiếu giảm giá? <a class="collapsed" href="#collapseThree" >  Nhấp vào đây để nhập mã của bạn </a> </h4>
                                        </div>

                                    </div>
                                </div>
                                @if(Session::has('thongbao'))
                                    <div class="alert alert-success">{{Session::get('thongbao')}}</div>
                                @endif
                            </div>
                            <div class="row">
                                <form action="{{route('dathang')}}" method="post">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                                    <div class="col-md-6 col-xs-12">
                                        <div class="billing-details">
                                            <div class="right-side">
                                                <div class="ship-acc clearfix">
                                                    <div class="ship-acc-body">

                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="input-box">
                                                                        <label>Họ và tên <em>*</em></label>
                                                                        <input type="text" name="full_name" class="info" placeholder="Họ và tên" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="input-box">
                                                                        <label>Giới tính </label><br>
                                                                        <input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
                                                                        <input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Nữ</span>

                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="input-box">
                                                                        <label>Địa chỉ Email<em>*</em></label>
                                                                        <input type="email" name="email" class="info" placeholder="Địa chỉ Email" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="input-box">
                                                                        <label>Số điện thoại<em>*</em></label>
                                                                        <input type="text" name="phone" class="info" placeholder="Số điện thoại" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="input-box">
                                                                        <label>Địa chỉ <em>*</em></label>
                                                                        <input type="text" name="address" class="info mb-10" required placeholder="Số nhà, số đường(phố), phường(xóm), quận(huyện), thành phố">
                                                                    </div>
                                                                </div>

                                                            </div>

                                                    </div>
                                                </div>
                                                <div class="form">
                                                    <div class="input-box">
                                                        <label>Ghi chú đơn đặt hàng</label>
                                                        <textarea name="notes" placeholder="Ghi chú của khách hàng" class="area-tex" required=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xs-12">

                                        <div class="ship-acc clearfix">
                                            {{--<div class="ship-toggle-2">--}}
                                                {{--<input class="ship-toggle-2" type="checkbox">--}}
                                                {{--<label for="ship-toggle">Địa chỉ  thay đôỉ?</label>--}}
                                            </div>
                                            {{--<div class="ship-ac-body" style="display: none;">--}}
                                                {{--<div class="row">--}}
                                                    {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
                                                        {{--<div class="input-box">--}}
                                                            {{--<label>Họ và tên <em>*</em></label>--}}
                                                            {{--<input type="text" name="full_name" class="info" placeholder="Họ và tên" required>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
                                                        {{--<div class="input-box">--}}
                                                            {{--<label>Giới tính </label><br>--}}
                                                            {{--<input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>--}}
                                                            {{--<input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Nữ</span>--}}

                                                        {{--</div>--}}
                                                    {{--</div>--}}

                                                    {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
                                                        {{--<div class="input-box">--}}
                                                            {{--<label>Địa chỉ Email<em>*</em></label>--}}
                                                            {{--<input type="email" name="email" class="info" placeholder="Địa chỉ Email" required>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
                                                        {{--<div class="input-box">--}}
                                                            {{--<label>Số điện thoại<em>*</em></label>--}}
                                                            {{--<input type="text" name="phone" class="info" placeholder="Số điện thoại" required>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
                                                        {{--<div class="input-box">--}}
                                                            {{--<label>Địa chỉ <em>*</em></label>--}}
                                                            {{--<input type="text" name="address" class="info mb-10" required placeholder="Số nhà, số đường(phố), phường(xóm), quận(huyện), thành phố">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}

                                                {{--</div>--}}
                                            {{--</div>--}}
                                        </div>

                                        <div class="your-order-head"><h5>Hình thức thanh toán</h5></div>

                                        <div class="your-order-body">
                                            <ul class="payment_methods methods">
                                                <li class="payment_method_bacs">
                                                    <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
                                                    <label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
                                                    <div class="payment_box payment_method_bacs" style="display: block;">
                                                        Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
                                                    </div>
                                                </li>

                                                <li class="payment_method_cheque">
                                                    <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
                                                    <label for="payment_method_cheque">Chuyển khoản </label>
                                                    <div class="payment_box payment_method_cheque" style="display: none;">
                                                        Chuyển tiền đến tài khoản sau:
                                                        <br>- Số tài khoản: 123 456 789
                                                        <br>- Chủ TK: Nguyễn A
                                                        <br>- Ngân hàng ACB, Chi nhánh TPHCM
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>


                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="order-view">
                                                    <h3>Hàng của bạn</h3>
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th class="cart_th">Sản phẩm</th>
                                                                <th class="cart_th">Tổng cộng</th>
                                                            </tr>
                                                        </thead>
                                                        @if(Session::has('cart'))
                                                            @foreach($product_cart as $product)
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <img src="source/image/product/{{$product['item']['image']}}" alt="" class="responsive img_cart">
                                                                            {{$product['item']['name']}}

                                                                        </td>
                                                                        <td>
                                                                            {{number_format($product['price']/$product['qty'])}} đồng
                                                                            <strong class="product-quantity">× {{$product['qty']}}</strong>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            @endforeach
                                                        @endif
                                                        <tbody>
                                                            <tr>
                                                                <td>Tổng cộng</td>
                                                                <td>
                                                                    @if(Session::has('cart'))
                                                                        {{number_format($totalPrice)}}
                                                                    @else 0 @endif đồng
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row place-order">

                                            <input class="submit_check" type="submit" name="submit" value="Đặt hàng">

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
    @endsection
