<?php
/**
 * Created by PhpStorm.
 * User: 8470p
 * Date: 9/9/2018
 * Time: 10:19 PM
 */
?>
@extends('master')
@section('content')

    <div class="login">
    <div class="shopping_cart">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="cart-content">
                        <form method="post" action="#">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="title_possellers cart_shop"><h4>Bảng món bạn chọn</h4></div>
                            <div class="table-responsive">
                                <table class="shop-cart-table">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail ">Ảnh món</th>
                                            <th class="product-name ">Tên món</th>
                                            <th class="product-price ">Giá</th>
                                            <th class="product-quantity">Số lượng</th>
                                            <th class="product-subtotal ">Tổng giá món</th>
                                            <th class="product-remove">Xóa mặt hàng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if(Session::has('cart'))
                                    @foreach($product_cart as $product)
                                        <tr class="cart_item">
                                            <td class="item-img"><a href="#"><img src="source/image/product/{{$product['item']['image']}}" alt=""></a></td>
                                            <td class="item-title"><a href="{{route('chitietsanpham',$product['item']['id'])}}">{{$product['item']['name']}} </a></td>
                                            <td class="item-price">{{number_format($product['item']['unit_price'])}}</td>
                                            <td class="item-qty">
                                                <div class="cart-quantity">
                                                    <div class="product-qty">
                                                        <div class="cart-quantity">
                                                            <div class="cart-plus-minus">
                                                                <button type="button" class="sub">-</button>
                                                                <input type="text" class="quty" value="{{$product['qty']}}">
                                                                <button type="button" class="add">+</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="total-price" id="price"><strong>{{number_format($product['item']['unit_price'])}}</strong></td>
                                            <td class="remove-item"><a href="{{route('xoagiohang',$product['item']['id'])}}"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart-bottom-area">
                                <div class="row">
                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                        <div class="update-coupne-area">
                                            <div class="coupn-area">
                                                <div class="discount">
                                                    <h3>Mã giảm giá</h3>
                                                    <label for="coupon_code">Nhập mã phiếu giảm giá của bạn nếu bạn có.</label>
                                                    <input value="0" id="remove-coupone" name="remove" type="hidden">
                                                    <input value="" name="coupon_code" id="coupon_code"
                                                           class="input-text fullwidth"
                                                           type="text">
                                                    <button value="Apply Coupon" onclick="discountForm.submit(false)"
                                                            class="button coupon " title="Áp dụng mã " type="button"><span>Áp dụng</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-5 col-xs-12">
                                        <div class="cart-total-area">
                                            <div class="catagory-title cat-tit-5 text-right">
                                                <h3>Tổng số giỏ hàng</h3>
                                            </div>
                                            <div class="sub-shipping">
                                                <p>Tổng phụ <span>{{number_format($totalPrice)}} đồng</span></p>
                                            </div>
                                            <div class="process-cart-total">
                                                <p>Tổng giá <span>{{number_format($totalPrice)}} đồng</span></p>
                                            </div>
                                            <div class="process-checkout-btn text-right">
                                                <a  href="{{route('dathang')}}" class="button btn-proceed-checkout" title="Proceed to Checkout"
                                                        type="button"><span>Tiến hành thanh toán</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
    $('#qty').keyup(function(){
    if($(this).val() != '' && isNumber($(this).val()) && $(this).val() > 0)
    {
    var price = $('#real_price').val() * 1;
    var qty = $(this).val() * 1;
    
    var total = price * qty;
    $('#price').html(total);
    }
    else
    {
        $('#price').html('500');    
    }
});

function isNumber(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}
    </script>
    @endsection

