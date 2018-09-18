<?php

use App\TheLoai;

Route::get('/',function(){
	return view('welcome');
});

Route::get('thu',function(){
	return view('admin.theloai.danhsach');
});