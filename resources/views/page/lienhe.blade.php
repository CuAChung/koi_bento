<?php
/**
 * Created by PhpStorm.
 * User: 8470p
 * Date: 9/6/2018
 * Time: 8:00 PM
 */
?>

@extends('master')
@section('content')

<div class="login">
    <div class="page-adress">
        <div class="container">
            <div class="col-md-12" id="layout-page">
                <div class="content-contact row">
                    <div class="block-title">
                        <h4 class="title_possellers">
                            Danh mục blog
                        </h4>
                    </div>
                    <div class="google-map">
                        <div class="box_title">
                            Địa Chỉ Nhà Hàng
                        </div>
                        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.9417744477014!2d105.77879631446572!3d20.99497098601667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134534b3ece9ae7%3A0x2c54e8431a783aaf!2zVHJ1bmcgdMOibSBSRUFDSCBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1536197342305" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe></p>
                    </div>
                    <div class="col-md-7" id="col-left contactFormWrapper">
                        <h4 class="tynpt">Viết nhận xét</h4>
                        <hr class="line-left">
                        <p class="comment-contact">
                            Nếu bạn có thắc mắc gì, có thể gửi yêu cầu cho chúng tôi, và chúng tôi sẽ liên lạc lại với bạn sớm nhất có thể .
                        </p>
                        <form accept-charset="UTF-8" action="{{route('guilienhe')}}" class="contact-form" method="post">
                            <input name="form_type" value="contact" type="hidden">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input name="utf8" value="✓" type="hidden">
                            <div class="form-group">
                                <label for="contactFormName" class="sr-only">Tên</label>
                                <input required="" id="contactFormName" class="form-control input-lg" name="contact_name" placeholder="Tên của bạn" autocapitalize="words" value="" type="text">
                            </div>
                            <div class="form-group">
                                <label for="contactFormEmail" class="sr-only">Email</label>
                                <input required="" name="contact_email" placeholder="Email của bạn" id="contactFormEmail" class="form-control input-lg" autocorrect="off" autocapitalize="off" value="" type="email">
                            </div>
                            <div class="form-group">
                                <label for="contactFormMessage" class="sr-only">Nội dung</label>
                                <textarea required="" rows="6" name="contact_note" class="form-control" placeholder="Viết bình luận" id="contactFormMessage"></textarea>
                            </div>
                            <input class="btn btn-primary btn-lg" value="Gửi liên hệ" type="submit">
                        </form>
                    </div>
                    <div class="col-md-5">
                        <h4 class="tynpt">Chúng tôi ở đây</h4>
                        <hr class="line-right">
                        <h4 class="tynpt">KOIBENTO </h4>
                        <p class="comment-koi" ">Mang đến sự tinh túy trong âm thực</p>
                        <ul class="info-address">
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>Trung Văn, Nam Từ Liêm, Hà Nội</span>
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-envelope"></i>
                                <span>phamquyk41@gmail.com</span>
                            </li>
                            <li>
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                <span>01633468605</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection