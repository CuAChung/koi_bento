<?php
/**
 * Created by PhpStorm.
 * User: 8470p
 * Date: 9/5/2018
 * Time: 10:37 AM
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <!--[if IE 9 ]> <html lang="vi" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="ie9 loading-site no-js"> <![endif]-->
        <!--[if IE 8 ]> <html lang="vi" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="ie8 loading-site no-js"> <![endif]-->
        <!--[if (gte IE 9)|!(IE)]><!-->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <title>koibento</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Gentium+Basic:400,700/Lato:400,700,900i/Open+Sans:400,600,700/Yeseva+One"
              rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <!-- CSS Style -->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/adress.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/ckeck_out.css')}}">
        <link rel="stylesheet" href="{{asset('css/giohang_style.css')}}">
        <link rel="stylesheet" href="{{asset('css/introduce.css')}}">
        <link rel="stylesheet" href="{{asset('css/login_style.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/menu.css')}}">
        <link rel="stylesheet" href="{{asset('css/new-style.css')}}">
        <link rel="stylesheet" href="{{asset('css/news.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/page.css')}}">
        <link rel="stylesheet" href="{{asset('css/pass_style.css')}}">
        <link rel="stylesheet" href="{{asset('css/res_style.css')}}">
        <link rel="stylesheet" href="{{asset('css/shopping.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}" media="all">

    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
    <div class="culmn">

        @include('header')

        @yield('content')

        @include('footer')
    </div>
    <div class='lentop'>
        <div class="up">
            <a href="#" class="fa fa-angle-up"></a>
        </div>
    </div>
    <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.mixitup.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <script>
        new WOW (). init ();
    </script>


    <script>
        $('.add').click(function () {
            if ($(this).prev().val() < 1000) {
                $(this).prev().val(+$(this).prev().val() + 1);
            }
        });
        $('.sub').click(function () {
            if ($(this).next().val() > 1) {
                if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
            }
        });
    </script>
    <script>
        $(document).ready(function () {
            var flag = 0;
            $(".a").click(function () {
                if (flag == 0) {
                    $(".p-product-image-feature").attr("src", "source/images/2.png");
                    flag = 1;
                }
                else if (flag == 1) {
                    $(".p-product-image-feature").attr("src", "source/images/3.png");
                    flag = 0;
                }
                else if (flag == 1) {
                    $(".p-product-image-feature").attr("src", "source/images/4.png");
                    flag = 0;
                }
                else if (flag == 1) {
                    $("#p-product-image-feature").attr("src", "source/images/nen.png");
                    flag = 0;
                }
            });
        });
    </script>
    <script>
        $('#slider-owl').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: [
                "<i class='fa fa-caret-left'></i>",
                "<i class='fa fa-caret-right'></i>"
            ],
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
    <script>
        function onclick(event){
            windown.location.href='{{route('dathang')}}';
        }
    </script>


    </body>
</html>
