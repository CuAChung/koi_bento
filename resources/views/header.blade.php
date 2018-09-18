<?php
/**
 * Created by PhpStorm.
 * User: 8470p
 * Date: 9/5/2018
 * Time: 10:38 AM
 */
?>
<div class="howl"></div>
<div id="head" class="navbar-fixed-top">
    <!--heard-top-->
    <div class="menu-heard">
        <div class="container">
            <div class="hea-content clearfix">
                <ul>
                    <li><a href="#" class="fa fa-phone">01633468605</a></li>
                    @if(Auth::check())
                        <li><a href="{{route('logout')}}"><i class="fa fa-logout"></i> Đăng xuất</a></li>
                        <li><a href=""><i class="fa fa-user"></i>Bạn: {{Auth::user()->full_name}}</a></li>
                    @else
                        <li><a href="{{route('signin')}}">Đăng kí</a></li>
                        <li><a href="{{route('dangnhap')}}">Đăng nhập</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <!--end-heard top-->
    <!--heard menu-->
    <div class="main_menu_bg">
        <nav class="navbar navbar-inverse" id="navbar-toggle">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{route('trang-chu')}}"><img src="{{asset('images/logo.png')}}" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
                        <li><a href="{{route('thucdon')}}">Thực đơn</a></li>
                        <li><a href="{{route('gioithieu')}}">Giới thiệu</a></li>
                        <li><a href="{{route('news')}}">Tin tức</a></li>
                        <li><a href="{{route('lienhe')}}">Liên hệ</a></li>
                        <li>
                            <div class="form-search">

                            <form class="search_mini_form " action="{{route('search')}}" method="Get">
                                
                                    <input name="q" value="" class="input-text" placeholder="Tìm kiếm" type="text">
                                    <button type="submit" title="Search" class="button-search">
                                        <i class="fa fa-search" aria-hidden="true"></i>

                                    </button>
                               
                            </form>
                             </div>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                <span class="cart-store">
                                    @if(Session::has('cart')) {{Session('cart')->totalQty}} @else 0 @endif
                                </span>
                            </a>


                            <div class="top-cart-content">
                                <ul class="mini-products-list" id="cart-sidebar" style="display:  grid;">
                                    @if(Session::has('cart'))
                                        <div>Giỏ hàng của bạn</div>
                                    @foreach($product_cart as $product)
                                        <li class="item">
                                            <div class="item-inner">
                                                <a class="product-image" title="{{$product['item']['name']}}" href="#">
                                                    <img class="img-responsive" alt="product tilte is here" src="{{asset('source/image/product/')}}/{{$product['item']['image']}}">
                                                </a>
                                                <div class="product-details">
                                                    <div class="access">
                                                        <a class="btn-remove1" title="Remove This Item" href="#">Remove</a>
                                                        <a class="btn-edit" title="Edit item" href="{{route('xoagiohang',$product['item']['id'])}}"><i class="fa fa-times"></i><span class="hidden">Edit item</span></a>
                                                    </div>
                                                    <p class="product-name">{{$product['item']['name']}}</p>
                                                    <strong>{{$product['qty']}}</strong> x
                                                    <span class="price">
                                                        @if($product['item']['promotion_price']!=0)
                                                            <span class="flash-salel">{{number_format($product['item']['promotion_price'])}}đồng</span>
                                                        @else
                                                            <span class="flash-salel">{{number_format($product['item']['unit_price'])}}đồng</span>
                                                        @endif

                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                        <div class="actions">
                                            <div class="cart-total">Tổng tiền: <span class="flash-saled">{{number_format($totalPrice)}} đồng</span></div>
                                            <a href="{{route('giohang')}}" class="view-cart" title="Xem giỏ hàng"><span>Xem giỏ hàng</span></a>
                                            <button onclick="window.location.href='{{route('dathang')}}'" class="btn-checkout"
                                                    title="Checkout" type="button" title="Thanh toán"> <span>Thanh toán</span>
                                            </button>
                                        </div>
                                    @else
                                        <div>Giỏ hàng trống</div>
                                </ul>

                            </div>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--end hearder menu-->
</div>