<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * Giao diện trang chủ chính
 */
Route::get('index', [
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);

/**
 * Giao diện loại sản phẩm
 */
Route::get('loai-sanpham/{type}',[
    'as'=>'loaisanpham',
    'uses'=>'PageController@getLoaiSp'
]);

/**
 * Giao diện chi tiết sản phẩm
 */
Route::get('chitiet-sanpham/{id}',[
    'as'=>'chitietsanpham',
    'uses'=>'PageController@getChitiet'
]);

/**
 * Giao diện liên hệ Contact
 */
Route::get('lien-he',[
    'as'=>'lienhe',
    'uses'=>'PageController@getLienhe'
]);

/**
 * Giao diện trang giới thiệu
 */
Route::get('gioi-thieu',[
    'as'=>'gioithieu',
    'uses'=>'PageController@getGioiThieu'
]);

/**
 * Giao diện thực đơn
 */
Route::get('thuc-don',[
    'as'=>'thucdon',
    'uses'=>'PageController@getThucdon'
]);

/**
 * Giao diện tin tức
 */
Route::get('tin-tuc',[
    'as'=>'news',
    'uses'=>'PageController@getTintuc'
]);


Route::get('chi-tiet-tin-tuc/{id}',[
    'as'=>'chitiet',
    'uses'=>'PageController@getChitiettintuc'
]);

/**
 * Thêm giỏ hàng
 */
Route::get('add-to-cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'PageController@getAddtoCart'
]);

/**
 * Trang xem giỏ hàng
 */
Route::get('gio-hang-cua-ban',[
    'as'=>'giohang',
    'uses'=>'PageController@getGiohang'
]);


/**
 * Xóa giỏ hàng đã thêm
 */
Route::get('del-cart/{id}',[
    'as'=>'xoagiohang',
    'uses'=>'PageController@getDelItemCart'
]);

/**
 * Đặt hàng và lưu
 */
Route::get('dat-hang',[
    'as'=>'dathang',
    'uses'=>'PageController@getCheckout'
]);
Route::post('dat-hang',[
    'as'=>'dathang',
    'uses'=>'PageController@postCheckout'
]);

/**
 * Đăng nhập
 */
Route::get('dang-nhap',[
    'as'=>'dangnhap',
    'uses'=>'PageController@getLogin'
]);

Route::post('dang-nhap',[
    'as'=>'dangnhap',
    'uses'=>'PageController@postLogin'
]);

/**
 * Quên mật khẩu
 */
// Route::get('quen-mat-khau',[
//     'as'=>'fot_pass',
//     'uses'=>'PageController@getRepass'
// ]);

Route::post('quen-mat-khau',[
    'as'=>'for_pass',
    'uses'=>'PageController@postRepass'
]);

/**
 * Đăng ký tài khoản
 */
Route::get('dang-ki',[
    'as'=>'signin',
    'uses'=>'PageController@getSignin'
]);

Route::post('dang-ki',[
    'as'=>'signin',
    'uses'=>'PageController@postSignin'
]);

/**
 * Đăng xuất
 */
Route::get('dang-xuat',[
    'as'=>'logout',
    'uses'=>'PageController@postLogout'
]);


/**
 * Gửi liên hệ
 */
Route::get('gui-lien-he',[
    'as'=>'guilienhe',
    'uses'=>'PageController@getGuilienhe'
]);

Route::post('gui-lien-he',[
    'as'=>'guilienhe',
    'uses'=>'PageController@postGuilienhe'
]);

/**
 * Đọc chi tiết tin tức
 */
Route::get('chi-tiet-tin-tuc',[
    'as'=>'news_tintuc',
    'uses'=>'PageController@getNewtintuc'
]);

/**
 * Đọc chi tiết trang giỏ hàng
 */
Route::get('chi-tiet-cu-the/{id}',[
    'as'=>'giohangcuthe',
    'uses'=>'PageController@getChitietCuthe'
]);

/**
 * Chức Năng Tìm Kiếm
 */
Route::get('search',[
    'as'=>'search',
    'uses'=>'PageController@getSearch'
]);


/**
*AdmController
*admin
*/
Route::group(['prefix'=>'admin'],function()
{
    Route::get('login','AdmController@getLogin');
    Route::post('login','AdmController@postLogin');

    Route::get('quan_tri_vien','AdmController@getAdmin');
    // Route::post('quan_tri_vien','AdmController@postAdmin');
    
    //Group thêm sản phẩm
    Route::group(['prefix'=>'product'],function(){

        //admin/product/{danhsach/sua/them}
        Route::get('danhsach','AdmController@getDanhSach');

        Route::get('sua/{id}','AdmController@getSua');
        Route::post('sua/{id}','AdmController@postSua');

        Route::get('them','AdmController@getThem');
         Route::post('them','AdmController@posttThem');

         Route::get('xoa/{id}','AdmController@getXoa');
    });

    //Group thêm người dùng
    Route::group(['prefix'=>'user'],function(){

        //admin/user/{danhsach/sua/them}
        Route::get('danhsach','AdmController@getDanhSachUser');

        Route::get('sua/{id}','AdmController@getSuaUser');
        Route::post('sua/{id}','AdmController@postSuaUser');

        Route::get('them','AdmController@getThemUser');
        Route::post('them','AdmController@posttThemUser');

        Route::get('xoa/{id}','AdmController@getXoaUser');
    });

    //Group thêm tin tức
    Route::group(['prefix'=>'news'],function(){
        
        //admin/news/{danhsach/sua/them}
        Route::get('danhsach','AdmController@getDanhSachTin');

        Route::get('sua/{id}','AdmController@getSuaTin');
        Route::post('sua/{id}','AdmController@postSuaTin');

        Route::get('them','AdmController@getThemTin');
        Route::post('them','AdmController@posttThemTin');

        Route::get('xoa/{id}','AdmController@getXoaTin');
    });


});