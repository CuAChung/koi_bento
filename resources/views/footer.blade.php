<?php
/**
 * Created by PhpStorm.
 * User: 8470p
 * Date: 9/5/2018
 * Time: 10:38 AM
 */
?>


    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="footer-block">
                        <div class="footer-block-title">
                            <h3>Thời gian</h3>
                        </div>
                        <div class="footer-block-content">
                            <ul>
                                <li>
                                    <span class="day">Thứ 2</span>
                                    <span class="house">8:00-17:00</span>
                                </li>
                                <li>
                                    <span class="day">Thứ 3</span>
                                    <span class="house">8:00-17:00</span>
                                </li>
                                <li>
                                    <span class="day">Thứ 4</span>
                                    <span class="house">8:00-17:00</span>
                                </li>
                                <li>
                                    <span class="day">Thứ 5</span>
                                    <span class="house">8:00-17:00</span>
                                </li>
                                <li>
                                    <span class="day">Thứ 6</span>
                                    <span class="house">8:00-17:00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="footer-block-title">
                        <h3>Liên hệ</h3>
                    </div>
                    <div class="footer-adress-content">
                        <ul>
                            <li>
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span class="adress">Trung Văn, Nam Từ Liêm, Hà Nội</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <span class="adress">tsoolauj1234@gmail.com</span>
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span class="adress">0163 774 4069</span>
                            </li>
                        </ul>
                    </div>
                    <div class="socials-wrap">
                        <ul>
                            <li class="li-social facebook-social">
                                <a class="_blank" href="https://www.facebook.com/koibentovietnam/" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="li-social twitter-social">
                                <a class="_blank" href="b" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="li-social google-social">
                                <a class="_blank" href="c" target="_blank"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li class="li-social rss-social">
                                <a class="_blank" href="d" target="_blank"><i class="fa fa-rss"></i></a>
                            </li>
                            <li class="li-social vimeo-social">
                                <a class="_blank" href="e" target="_blank"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 getintouch-footer wow fadeIn">
                    <div class="footer-block">
                        <div class="footer-block-title">
                            <h3>Gửi liên hệ</h3>
                        </div>
                        <div class="footer-send-content">
                            <div id="messages_product_view_footer"></div>
                            <form accept-charset="UTF-8" action="{{route('guilienhe')}}" class="contact-form" method="post">
                                <input name="form_type" value="contact" type="hidden">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input name="utf8" value="✓" type="hidden">
                                <div class="form-wrapper">
                                    <ul class="form-list">
                                        <li class="fields">
                                            <div class="field">
                                                <div class="input-box">
                                                    <input required="" id="name" name="contact_name"
                                                           class="input-text required-entry"
                                                           placeholder="Tên của bạn..." autocapitalize="words" value=""
                                                           type="text">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="input-box">
                                                    <input required="" name="contact_email" id="email"
                                                           class="input-text required-entry validate-email"
                                                           placeholder="Email của bạn..." type="email">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="wide field">
                                            <div class="input-box">
                                                    <textarea required="" name="contact_note" id="comment"
                                                              class="required-entry input-text" cols="10" rows="7"
                                                              placeholder="Viết bình luận..."></textarea>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="buttons-set">
                                    <input name="hideit" id="hideit" value="" style="display:none !important;" type="text">
                                    <button type="submit" title="Send" class="button">Gửi</button>
                                    <button class="button" type="reset" value="Reset">Hủy</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


