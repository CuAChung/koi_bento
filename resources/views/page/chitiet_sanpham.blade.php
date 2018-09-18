<?php
/**
 * Created by PhpStorm.
 * User: 8470p
 * Date: 9/8/2018
 * Time: 12:43 AM
 */
?>
@extends('master')

@section('content')

<div class="login">
    <div class="page-cart">
        <div class="container">
            <ul>
                <li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
                <li><a href="{{route('thucdon')}}">Sản phẩm</a></li>
                <li><span>Chi tiết sản phẩm</span></li>
            </ul>
        </div>
    </div>

    <div class="page-main">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-5 col-xs-6">
                    <div class="surroud">
                        <img class="p-product-image-feature" src="{{asset('source/image/product/')}}/{{$sanpham->image}}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-xs-6 pull-right">
                    <div class="form-input">
                        <h4 class="price-content">{{$sanpham->name}}</h4>
                        <div class="space59">&nbsp;</div>
                        <div class="product-price">
                            @if($sanpham->promotion_price == 0)
                                <span class="flash-sale">{{number_format($sanpham->unit_price)}} đồng</span>
                            @else
                                <span class="flash-del">{{number_format($sanpham->unit_price)}}đồng</span>
                                <span class="flash-sale">{{number_format($sanpham->promotion_price)}} đồng</span>
                            @endif
                        </div>
                    </div>
                    <div class="p-option-wrapper" style="display: none;">
                        <select name="id" class="" id="p-select">
                            <option value="1004637490">Default Title - 21500000</option>
                        </select>
                    </div>
                    <!-- <div class="quantity-box clearfix ">
                        <button type="button" class="sub">-</button>
                        <input type="text" class="quty" value="1">
                        <button type="button" class="add">+</button>
                    </div> -->
                    <div class="form-input" style="width: 100%">
                        <div class="form-sumbit">
                            <div class="space60">&nbsp;</div>
                            <a type="submit" class="btn-detail  btn-color-add btn-min-width btn-mgt btn-addcart"
                                    style="display: block;" href="{{route('themgiohang',$sanpham->id)}}">Thêm vào giỏ
                            </a>
                        </div>
                    </div>

                </div>
                
            <div class="content-production col-lg-12">
                <h3>Mô tả sản phẩm</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-content">
                            <p>{{$sanpham->description}} </p>
                            <img class="img-responsive" src="{{asset('source/image/product/')}}/{{$sanpham->image}}" alt=""
                                 data-mce-style="box-sizing: border-box; border: 0px; vertical-align: middle; display: block; margin-left: auto; margin-right: auto; max-width: 70%; height: auto;"
                                 style="box-sizing: border-box; font-family: inherit; margin: 0px auto; padding: 0px; outline: none; border: 0px; vertical-align: middle; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; width: auto; max-width: 70%; display: block; height: auto;"
                                 width="710" height="474">
                            <p>Ngoài món nướng, đến với Hanayoshi lần này, bạn còn có cơ hội thưởng thức món lẩu kim chi
                                vô cùng hấp dẫn. Hương vị cay nồng, đậm đà của nước lẩu quyện cùng thịt bò mềm, ngọt và
                                các loại rau xanh tạo nên một món ăn bổ dưỡng, ngon miệng, được rất nhiều thực khách ưa
                                thích.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider col-lg-12">
                <h3>Sản phẩm khác</h3>
                <div id="slider-owl" class="owl-carousel">
                    @foreach($sp_tuongtu as $sptt)
                        <div class="item">
                            <div class="img">
                                <img class="img-responsive" src="{{asset('source/image/product/')}}/{{$sptt->image}}" alt="">
                                @if($sptt->promotion_price != 0)
                                    <span class="sell">50%</span>
                                @endif
                                <div class="over-lay"></div>
                                <div class="buttons">
                                    <a href="{{route('chitietsanpham',$sptt->id)}}" class="fa fa-link"></a>
                                    <a href="{{route('themgiohang',$sptt->id)}}" class="fa fa-cart-plus"></a>
                                </div>
                            </div>
                            <div class="img-content">
                                <ul>
                                    <li><a href="#">{{$sptt->name}}</a></li>
                                    <li>
                                        @if($sptt->promotion_price == 0)
                                            <span class="flash-sale">{{number_format($sptt->unit_price)}}đồng</span>
                                        @else
                                            <span class="flash-del">{{number_format($sptt->unit_price)}}đồng</span>
                                            <span class="flash-sale">{{number_format($sptt->promotion_price)}}đồng</span>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    @endsection
