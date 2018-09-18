<?php
/**
 * Created by PhpStorm.
 * User: 8470p
 * Date: 9/5/2018
 * Time: 10:56 AM
 */
?>
@extends('master')

@section('content')


    <!--{{--slide home--}}-->
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
    <!-- tabs menu -->
    <div class="tabs-menu">
        <div class="container">
            <div class="tab-listing">
                <h2>Thực đơn nhà hàng</h2>
                <p>Thực đơn phong phú có hơn 50 món do chính tay đầu bếp giàu kinh nghiệm lựa chọn</p>
            </div>
            <div class="controls">
                <button class="filter" data-filter="all">ALL</button>
                <button class="filter" data-filter=".category-1">Big Bento</button>
                <button class="filter" data-filter=".category-2">Mini Bento</button>
                <button class="filter" data-filter=".category-3">Sushi</button>
            </div>
            <div id="tab-menu" class="tab-menu clearfix">
                <!-- tabs1 -->
                @foreach($news_product as $new)
                    <div class="mix category-1 col-md-4 col-sm-4 col-xs-12">
                        <div class="mix-img">
                            <img src="source/image/product/{{$new->image}}" alt="" >
                            @if($new->promotion_price != 0)
                                <span class="sell">50%</span>
                            @endif
                            <a href="#" class="over-lay"></a>
                            <div class="buttons">
                                <a href="{{route('chitietsanpham',$new->id)}}" class="fa fa-link" title="Xem chi tiết sản phẩm"></a>
                                <a href="{{route('themgiohang',$new->id)}}" class="fa fa-cart-plus" title="Thêm vào giỏ"></a>
                            </div>
                        </div>
                        <div class="mix-content">
                            <ul>
                                <li><a href="#">{{$new->name}}</a></li>
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
                @foreach($n_product as $new)
                    <div class="mix category-2 col-md-4 col-sm-4 col-xs-12">
                        <div class="mix-img">
                            <img src="source/image/product/{{$new->image}}" alt="" >
                            @if($new->promotion_price != 0)
                                <span class="sell">50%</span>
                            @endif
                            <a href="#" class="over-lay"></a>
                            <div class="buttons">
                                <a href="{{route('chitietsanpham',$new->id)}}" class="fa fa-link" title="Xem chi tiết sản phẩm"></a>
                                <a href="{{route('themgiohang',$new->id)}}" class="fa fa-cart-plus" title="Thêm vào giỏ"></a>
                            </div>
                        </div>
                        <div class="mix-content">
                            <ul>
                                <li><a href="#">{{$new->name}}</a></li>
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
                @foreach($ne_product as $new)
                    <div class="mix category-3 col-md-4 col-sm-4 col-xs-12">
                        <div class="mix-img">
                            <img src="source/image/product/{{$new->image}}" alt="" >
                            @if($new->promotion_price != 0)
                                <span class="sell">50%</span>
                            @endif
                            <a href="#" class="over-lay"></a>
                            <div class="buttons">
                                <a href="{{route('chitietsanpham',$new->id)}}" class="fa fa-link" title="Xem chi tiết sản phẩm"></a>
                                <a href="{{route('themgiohang',$new->id)}}" class="fa fa-cart-plus" title="Thêm vào giỏ"></a>
                            </div>
                        </div>
                        <div class="mix-content">
                            <ul>
                                <li><a href="#">{{$new->name}}</a></li>
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
            <div class="row">{{$new_product->links()}}</div>
        </div>
    </div>
    <!-- end tabs menu -->
    <div class="group">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="group-1">
                        <h2>Đội ngũ nhân viên</h2>
                    </div>
                    <div class="logo-group">
                        <img alt="" src="images/logo.png">
                    </div>
                    <div class="pre-text">
                        <p>Đội ngũ nhân viên giàu kinh nghiệm,đã từng làm việc tại các nhà hàng Nhật Bản.Mang lại sự hài
                            lòng từ thực khách.</p>
                    </div>
                    <div id="group_1_owl" class="owl-carousel">
                        <div class="item">
                            <div class="inner">
                                <img src="images/image/anh-dinh.png" alt="">
                            </div>
                            <div class="name">
                                <h3>Trần Văn Đỉnh</h3>
                                <p>Đầu bếp trưởng</p>
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-skype"></a></li>
                                    <li><a href="#" class="fa fa-glide-g"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="inner">
                                <img src="images/image/anh-dung.png" alt="">
                            </div>
                            <div class="name">
                                <h3>Nguyễn Văn Dũng</h3>
                                <p>Đầu bếp trưởng</p>
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-skype"></a></li>
                                    <li><a href="#" class="fa fa-glide-g"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="inner">
                                <img src="images/image/lop-bep.jpg" alt="">
                            </div>
                            <div class="name">
                                <h3>Học sinh REACH</h3>
                                <p>Hỗ trợ</p>
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-skype"></a></li>
                                    <li><a href="#" class="fa fa-glide-g"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="inner">
                                <img src="images/image/Linh.jpg" alt="">
                            </div>
                            <div class="name">
                                <h3>Mai phương</h3>
                                <p>Marketing</p>
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-skype"></a></li>
                                    <li><a href="#" class="fa fa-glide-g"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="inner">
                                <img src="images/image/lop-bep.jpg" alt="">
                            </div>
                            <div class="name">
                                <h3>Học sinh REACH</h3>
                                <p>Marketing</p>
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-skype"></a></li>
                                    <li><a href="#" class="fa fa-glide-g"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="group-2">
        <div class="group_2_warp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title_home">
                            <img src="images/image/test-logo.png" alt="">
                            <h3>Nhận xét của khách hàng</h3>
                        </div>
                        <div id="group_2_owl" class="owl-carousel">
                            <div class="item">
                                <div class="client-child">
                                    <img src="images/image/6.png" alt="">
                                </div>
                                <div class="coment">
                                    <p>
                                        Bạn có thể bắt đầu tiệc buffet bằng chén súp thơm ngon làm ấm bụng, kế đến là
                                        vị chua thanh của món gỏi làm đánh thức các giác quan. Bạn cũng có thể chọn cho
                                        mình bánh tôm hồ Tây, Cola hải sản, bánh mì chiên thịt để khai vị. Món cuốn đặc
                                        sắc với xôi chiên, bánh xèo Hàn Quốc mới lạ, đặc biệt còn có cả chả giò chuối
                                        dành riêng cho những người ăn chay… Sau món cuốn là các món chiên – nướng đa dạng
                                        như: gà nướng muối ớt, hào đút lò, sò lá nướng mỡ hành, sò dẹo nướng sốt me, ốc
                                        bu hấp xã… cho thực khách cảm nhận đủ mùi vị chua, ngọt, mặn, cay vô cùng quyến
                                        rũ.
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-child">
                                    <img src="images/image/6.png" alt="">
                                </div>
                                <div class="coment">
                                    <p>
                                        Bạn có thể bắt đầu tiệc buffet bằng chén súp thơm ngon làm ấm bụng, kế đến là
                                        vị chua thanh của món gỏi làm đánh thức các giác quan. Bạn cũng có thể chọn cho
                                        mình bánh tôm hồ Tây, Cola hải sản, bánh mì chiên thịt để khai vị. Món cuốn đặc
                                        sắc với xôi chiên, bánh xèo Hàn Quốc mới lạ, đặc biệt còn có cả chả giò chuối
                                        dành riêng cho những người ăn chay… Sau món cuốn là các món chiên – nướng đa dạng
                                        như: gà nướng muối ớt, hào đút lò, sò lá nướng mỡ hành, sò dẹo nướng sốt me, ốc
                                        bu hấp xã… cho thực khách cảm nhận đủ mùi vị chua, ngọt, mặn, cay vô cùng quyến
                                        rũ.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="group-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog">
                        <img src="images/our-blog.png" alt="">
                        <h3>Món mới</h3>
                    </div>
                    <div id="group_3_silder" class="owl-carousel">
                        @foreach($sp_moi as $sput)
                            <div class="item">
                                <div>
                                    <div class="article-resize">
                                        <a class="img-responsive" href="{{route('chitietsanpham',$sput->id)}}"><img src="source/image/product/{{$sput->image}}" alt=""></a>
                                    </div>
                                    <div class="info-post">
                                        <h3><a href="{{route('chitietsanpham',$sput->id)}}">{{$sput->name}}</a></h3>
                                    </div>
                                    <div class="post-date">
                                        {{$sput->created_at}}
                                    </div>
                                    <div class="content-latest-post">
                                        <p>{{$sput->description}}</p>
                                        <a href="{{route('chitietsanpham',$sput->id)}}">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection