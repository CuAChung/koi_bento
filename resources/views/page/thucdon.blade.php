<?php
/**
 * Created by PhpStorm.
 * User: 8470p
 * Date: 9/6/2018
 * Time: 8:15 PM
 */
?>

@extends('master')

@section('content')

<div class="login">
    <div class="page-cart">
        <div class="container">
            <ul>
                <li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
                <li><span>Thực đơn</span></li>
            </ul>
        </div>
    </div>
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="slider-bar">
                                <!-- danh mục -->
                                <div class="news-menu list-group">
                                    <div class="block-title">
                                        <h4 class="title_possellers">
                                            Danh mục blog
                                        </h4>
                                    </div>
                                    <ul class="nav" id="menu-blog">
                                        <li class=" first">
                                            <a href="{{route('trang-chu')}}">
                                                <span>Trang chủ</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="{{route('thucdon')}}">
                                                <span>Thực đơn</span>
                                            </a>
                                        </li>
                                        <li class="current active  ">
                                            <a href="{{route('news')}}">
                                                <span>Tin tức - Sự kiện</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="{{route('gioithieu')}}">
                                                <span>Giới thiệu</span>
                                            </a>
                                        </li>
                                        <li class=" last">
                                            <a href="{{route('lienhe')}}">
                                                <span>Liên hệ</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end-danh mục -->
                            <!-- bài viết mới -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 coll-main">
                            <div class="row">
                                <div class="main-content">
                                    <div class="col-lg-12">
                                        <div class="title_possellers">
                                            <h4>Tất cả sản phẩm khuyến mại và được mua nhiều nhất</h4>
                                        </div>
                                    </div>
                                    @foreach($sanpham_khuyenmai as $spkm)
                                        <div class="product-list tab-menu mix col-md-4 col-sm-4 col-xs-12">
                                            <div class="mix-img">
                                                <img src="source/image/product/{{$spkm->image}}" alt="">
                                                @if($spkm->promotion_price != 0)
                                                    <span class="sell">50%</span>
                                                @endif
                                                <a href="#" class="over-lay"></a>
                                                <div class="buttons">
                                                    <a href="{{route('chitietsanpham',$spkm->id)}}" class="fa fa-link"></a>
                                                    <a href="{{route('themgiohang',$spkm->id)}}" class="fa fa-cart-plus"></a>
                                                </div>
                                            </div>
                                            <div class="mix-content">
                                                <ul>
                                                    <li><a href="#">{{$spkm->name}}</a></li>
                                                    <li>
                                                        <span class="flash-del">{{number_format($spkm->unit_price)}}đồng</span>
                                                        <span class="flash-sale">{{number_format($spkm->promotion_price)}}đồng</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                            <div class="row">{{$sanpham_khuyenmai->links()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection