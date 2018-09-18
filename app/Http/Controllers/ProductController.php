<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controllers;

use Illuminate\Http\Request;
use App\Cate;
use App\Http\Requests\ProductRequest;


class ProductController extends Controller
{
	
	public function postAdd(ProductRequest $product_request){
		$file_name = $product_request->file('fImage')->getClientOriginalName();

		$product = new product();
		$product->name  = $product_request->txtName;
		$product->name  = $product_request->txtName;
		$product->name  = $product_request->txtName;
		$product->name  = $product_request->txtName;
		$product->name  = $product_request->txtName;
		$product->name  = $product_request->txtName;
		$product->name  = $product_request->txtName;
		$product->name  = $product_request->txtName;
		$product->name  = $product_request->txtName;
		$product->name  = $product_request->txtName;
	}
}