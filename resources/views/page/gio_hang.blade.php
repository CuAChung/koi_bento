<?php
/**
 * Created by PhpStorm.
 * User: 8470p
 * Date: 9/7/2018
 * Time: 12:34 AM
 */
?>
@extends('master')
@section('content')

<div class="login">
    <div class="cart-content">
        <div class="container">
            <div class="menu-cart">
                <ul>
                    <li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
                    <li><a href="{{route('thucdon')}}">Sản phẩm</a></li>
                    <li><span>Thông tin sản phẩm</span></li>
                </ul>
            </div>
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <form method="post" action="{{route('giohangcuthe'}}">
                                    <div class="col-lg-5 col-sm-6">
                                        <div class="image-zoom row">
                                            {{--{{asset('images/nen.png')}}--}}
                                            <img class="p-product-image-feature" src="source/image/product/{{$chi_tiet->image}}" alt="">
                                            <div class="zoom-mg">
                                                <ul>
                                                    <li>
                                                        <a class="a" href="#"><img class="img-responsive" src="source/image/product/{{$chi_tiet->image}}"
                                                                                   alt=""></a>
                                                    </li>
                                                    <li>
                                                        <a class="a" href="#"><img class="img-responsive" src="source/image/product/{{$chi_tiet->image}}"
                                                                                   alt=""></a>
                                                    </li>
                                                    <li>
                                                        <a class="a" href="#"><img class="img-responsive" src="source/image/product/{{$chi_tiet->image}}"
                                                                                   alt=""></a>
                                                    </li>
                                                    <li>
                                                        <a class="a" href="#"><img class="img-responsive" src="source/image/product/{{$chi_tiet->image}}"
                                                                                   alt=""></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-sm-6 pull-right">
                                        <div class="form-input">
                                            <h4 class="p-title">Sản phẩm</h4>
                                            <div class="product-price">
                                                <span class="p-price ">
                                                    @if($chi_tiet->promotion_price == 0)
                                                        <span class="flash-sale">{{number_format($chi_tiet->unit_price)}} đồng</span>
                                                    @else
                                                        <span class="flash-del">{{number_format($chi_tiet->unit_price)}}đồng</span>
                                                        <span class="flash-sale">{{number_format($chi_tiet->promotion_price)}} đồng</span>
                                                    @endif
                                                </span>
                                                <span class="price-content">{{$chi_tiet->name}}</span>
                                            </div>
                                        </div>
                                        <div class="p-option-wrapper" style="display: none;">
                                            <select name="id" class="" id="p-select">
                                                <option value="1004637490">Default Title - 21500000</option>
                                            </select>
                                        </div>
                                        <div class="quantity-box clearfix ">
                                            <button type="button" class="sub">-</button>
                                            <input class="quty" type="text" value="1">
                                            <button type="button" class="add">+</button>
                                        </div>
                                        <div class="form-input" style="width: 100%">
                                            <button type="submit"
                                                    class="btn-detail  btn-color-add btn-min-width btn-mgt btn-addcart"
                                                    style="display: block;">Thêm vào giỏ
                                            </button>
                                            <button disabled=""
                                                    class="btn-detail addtocart btn-color-add btn-min-width btn-mgt btn-soldout"
                                                    style="display: none;">Hết hàng
                                            </button>
                                            <div class="qv-readmore">
                                                <span> hoặc </span><a class="read-more p-url"
                                                                      href="{{route('chitietsanpham',$chi_tiet->id)}}">Xem chi tiết</a>
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
    </div>
</div>
@endsection