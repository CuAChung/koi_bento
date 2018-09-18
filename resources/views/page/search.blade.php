<?php
/**
 * Created by PhpStorm.
 * User: 8470p
 * Date: 9/8/2018
 * Time: 10:17 AM
 */
?>
@extends('master')
@section('content')

    <div class="home">
        <div id="home" class="owl-carousel">
            @foreach($slide as $sl)
                <div class="item">
                    <div class="home_slider">
                        <img src="source/image/slide/{{$sl->image}}" alt="">
                        <div class="home_content">
                            <h4 class="wow fadeInDown">Thế giới ẩm thực</h4>
                            <span class="wow fadeInLeft">Tinh hoa của nghệ thuật</span>
                            <p class="wow fadeInLeft">Thưởng thức hương vị xứ hoa anh đào ngay trên Việt Nam</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="tabs-menu">
    <div class="container">
        <div class="space60">&nbsp;</div>
        <div class="">
            <div class="search-title">
                <h3>Sản phẩm tìm kiếm</h3>
            </div>
            <div class="beta-products-details">
                <p class="pull-left">Tìm thấy {{count($product)}} sản phẩm</p>
                <div class="clearfix"></div>
            </div>
        </div>
        <div id="tab-menu" class="tab-menu clearfix">
            <div class="space60">&nbsp;</div>
            <!-- tabs1 -->
            @foreach($product as $new)
                <div class="mix category-1 col-md-4 col-sm-4 col-xs-12 t_search">
                    <div class="mix-img">
                        <img src="source/image/product/{{$new->image}}" alt="">
                        @if($new->promotion_price != 0)
                            <span class="sell">50%</span>
                        @endif
                        <div class="over-lay"></div>
                        <div class="buttons">
                            <a href="{{route('chitietsanpham',$new->id)}}" class="fa fa-link"></a>
                            <a href="{{route('themgiohang',$new->id)}}" class="fa fa-cart-plus"></a>
                        </div>
                    </div>
                    <div class="mix-content">
                        <ul>
                            <li><a href="{{route('chitietsanpham',$new->id)}}">{{$new->name}}</a></li>
                            <li>
                                @if($new->promotion_price == 0)
                                    <span class="flash-sale">{{number_format($new->unit_price)}}đồng</span>
                                @else
                                    <span class="flash-del">{{number_format($new->unit_price)}}đồng</span>
                                    <span class="flash-sale">{{number_format($new->promotion_price)}}đồng</span>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">{{$product->links()}}</div>
    </div>
    </div>


@endsection

