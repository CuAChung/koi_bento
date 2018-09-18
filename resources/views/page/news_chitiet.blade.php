<?php
/**
 * Created by PhpStorm.
 * User: 8470p
 * Date: 9/9/2018
 * Time: 3:07 PM
 */
?>
@extends('master')
@section('content')

    <div class="page-cart">
        <div class="container">
            <ul>
                <li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
                <li><span>Tin tức</span></li>
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
                                            <a href="news.html">
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
                            <div class="news-latest list-group">
                                <div class="block-title">
                                    <h4 class="title_possellers">
                                        Bài viết mới nhất
                                    </h4>
                                </div>
                                <div class="content-latest">
                                    @foreach($tin_tuc as $tin)
                                        <div class="article seller-item ">
                                            <div class="sellers-img">
                                                <a href="{{route('chitiet',$tin->id)}}" class="products-block-image content_img clearfix">
                                                    <img class="img-responsive" src="{{asset('source/image/news/')}}/{{$tin->image}}" alt="{{$tin->name}}">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="bs-title">
                                                    <a href="{{route('chitiet',$tin->id)}}">Thưởng thức kem {{$tin->title}}</a>
                                                </h5>
                                                <span class="date"> <i class="time-date"></i>{{$tin->updated_at}}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- end bài viết mới -->
                            <!-- tin tức -->
                        </div>
                        <div id="blog-container" class="col-lg-9 col-sm-12 col-xs-12">
                            <div class="col-sm-12 articles clearfix" id="layout-page">
                                <div class="block-title">
                                    <h4 class="title_possellers">
                                        Ẩm thực Nhật Bản
                                    </h4>
                                </div>
                                <div class="news-content row">
                                    <div class="content-article col-sm-12">
                                        <!-- Begin: Nội dung bài viết -->
                                        <h4 class="title-article"><a href="bai-viet.html">{{$new_tintuc->title}}</a></h4>
                                        <div class="body-content">
                                            <ul class="date-post">
                                                <li>
                                                    <i class="fa fa-clock-o"></i>
                                                    <p>
                                                        {{$new_tintuc->created_at}}
                                                    </p>
                                                    <p>Cứ Chung</p>
                                                </li>
                                            </ul>
                                            <div class="content-news">
                                                <p>{{$new_tintuc->content}}...</p>
                                                <a href="#"><img class="img-responsive" src="{{asset('source/image/news/')}}/{{$new_tintuc->image}}" alt=""></a>
                                                <p>{{$new_tintuc->content}}</p>
                                            </div>
                                        </div>
                                        <!-- End: Nội dung bài viết -->
                                    </div>
                                </div>
                            </div>
                            <!-- Begin: Nội dung blog -->
                            <!-- end tin tức -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
