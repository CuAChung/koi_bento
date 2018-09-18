<?php
/**
 * Created by PhpStorm.
 * User: 8470p
 * Date: 9/6/2018
 * Time: 8:49 PM
 */
?>
@extends('master')

@section('content')
<div class="login">
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
                                                    <img class="img-responsive" src="source/image/news/{{$tin->image}}" alt="{{$tin->name}}">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="bs-title">
                                                    <a href="{{route('chitiet',$tin->id)}}">{{$tin->title}}</a>
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
                                        Tin tức
                                    </h4>
                                </div>
                                @foreach($tin_tuc as $tin)
                                    <div class="news-content row">
                                        <div class="col-sm-5 col-xs-12 img-article">
                                            <a href="{{route('chitiet',$tin->id)}}">
                                                <img class="img-responsive" src="source/image/news/{{$tin->image}}">
                                            </a>
                                        </div>
                                        <div class="content-article col-sm-7">
                                            <!-- Begin: Nội dung bài viết -->
                                            <h4 class="title-article"><a href="{{route('chitiet',$tin->id)}}">{{$tin->title}}</a></h4>
                                            <div class="body-content tin_tuc">
                                                <ul class="date-post">
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        <p>
                                                            {{$tin->created_at}}
                                                        </p>
                                                    </li>
                                                </ul>
                                                <p>{{$tin->content}}</p>
                                            </div>
                                            <!-- End: Nội dung bài viết -->
                                            <a class="readmore clear-fix" href="{{route('chitiet',$tin->id)}}" role="button">Xem tiếp <span class="fa fa-angle-double-right"></span></a>
                                            <div class="postDetails">
                                                <ul class="count-comment-blog">
                                                    <li><i class="fa fa-file-text-o"></i> <a href="#"> Tin tức	</a> </li>
                                                    <li><a href="">{{$tin->created_at}}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- Begin: Nội dung blog -->
                                <!-- end tin tức -->
                            </div>
                            <div class="row">{{$tin_tuc->links()}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection