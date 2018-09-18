<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use App\User;
use App\News;
use Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Session;

class AdmController extends Controller
{
	//Trang chủ admin
	public function getAdmin(){
		return view('admin.trang_chu');		
	}


	//---------------------------------------------------------------------------------------------------//
	//Login admin
	//--------------------------------------------------------------------------------------------------//
	public function getLogin(){
		return view('admin.login');
	}
	public function postLogin(Request $req){
		$this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu ít nhất 20 kí tự'
            ]
        );
		$credentials = array('email'=>$req->email, 'password'=>$req->password);
		if (Auth::attempt($credentials)){
            return redirect('admin/quan_tri_vien'); //back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
        }else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
        }
	}

	//---------------------------------------------------------------------------------------------------//
	//Danh sách các món
	//--------------------------------------------------------------------------------------------------//
    public function getDanhSach()
    {
    	$product = Product::all();
       return view('admin.product.danhsach',['product'=>$product]);
    }


    //Thêm danh sách món
    
    public function getThem()
    {
       return view('admin.product.them');
    }
    public function posttThem(Request $request)
    {
    	$this->validate($request,
    		[
    			'name'=>'required|min:2|max:100|unique:products,name',
    			'mota'=>'required',
    			'gia'=>'required',
    			'hinhanh'=>'required'
    		],
    		[
    			'name.required'=>'Bạn chưa nhập tên',
    			'name.min'=>'Tên phải từ 2 - 100 kí tự',
    			'name.max'=>'Tên phải từ 2 - 100 kí tự',
    			'name.unique'=>'Tên đã được sử dụng',
    			'mota.required'=>'Bạn chưa nhập mô tả',
    			'gia.required'=>'Bạn chưa nhập giá',
    			'hinhanh.required'=>'Bạn chưa nhập file'
    		]);
    	$product = new Product;
    	$product->name = $request->name;
    	$product->description = $request->mota;
    	$product->unit_price = $request->gia;
    	$product->image = $request->hinhanh;
    	$product->save();

    	return redirect('admin/product/them')->with('thongbao','Thêm thành công');
    }

    //Sưa danh sách món
    public function getSua($id)
    {
       $product=Product::find($id);
       return view('admin.product.sua',['product'=>$product]);
    }
    public function postSua(Request $req, $id){
    	$product=Product::find($id);
    	$this->validate($req,
    		[
    			//để kiểm tra xem có trùng tên không dùng: unique:
    			'name'=>'required|min:2|max:100|unique:products,name',
    			'mota'=>'required',
    			'gia'=>'required'
    		],
    		[
    			'name.required'=>'Bạn chưa nhập tên',
    			'name.min'=>'Tên phải từ 2 - 100 kí tự',
    			'name.max'=>'Tên phải từ 2 - 100 kí tự',
    			'name.unique'=>'Tên đã được sử dụng',
    			'mota.required'=>'Bạn chưa nhập mô tả',
    			'gia.required'=>'Bạn chưa nhập giá'
    		]
    	);
    	$product->name = $req->name;
    	$product->description = $req->mota;
    	$product->unit_price = $req->gia;
    	$product->save();

    	return redirect('admin/product/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    //Xóa danh sách món
    public function getXoa($id){
    	$product=Product::find($id);
    	$product->delete();

    	return redirect('admin/product/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }


    //--------------------------------------------------------------------------------------------------//
    //Thêm danh sách món
    //--------------------------------------------------------------------------------------------------//
     public function getDanhSachUser()
    {
    	$user = User::all();
       return view('admin.user.danhsach',['user'=>$user]);
    }

     //Thêm danh sách món
    public function getThemUser()
    {
       return view('admin.user.them');
    }
    public function posttThemUser(Request $request)
    {
    	$this->validate($request,
    		[
    			'name'=>'required|min:2|max:100|unique:users,full_name',
    			'email'=>'required|email',
    			'password'=>'required|min:6|max:32',
    			'phone'=>'required|max:11',
    			'address'=>'required'
    		],
    		[
    			'name.required'=>'Bạn chưa nhập cột họ và tên',
    			'name.min'=>'Tên phải từ 2 - 100 kí tự',
    			'name.max'=>'Tên phải từ 2 - 100 kí tự',
    			'name.unique'=>'Tên đã được sử dụng',
    			'email.required'=>'Bạn chưa nhập email',
    			'email.email'=>'Không đúng định dạng email',
    			'password.required'=>'Bạn chưa nhập Mật khẩu',
    			'phone.required'=>'Bạn chưa nhập số điện thoại',
    			'phone.max'=>'Số điện thoại không đúng',
    			'address.required'=>'Bạn chưa nhập địa chỉ'
    		]);
    	$user = new User;
    	$user->full_name = $request->name;
    	$user->email = $request->email;
    	$user->password = $request->password;
    	$user->phone = $request->phone;
    	$user->address = $request->address;
    	$user->save();

    	return redirect('admin/user/them')->with('thongbao','Thêm thành công');
    }

    //Sưa danh sách món
    public function getSuaUser($id)
    {
       $user=User::find($id);
       return view('admin.user.sua',['user'=>$user]);
    }
    public function postSuaUser(Request $req, $id){
    	$user=User::find($id);
    	$this->validate($req,
    		[
    			//để kiểm tra xem có trùng tên không dùng: unique:
    			'name'=>'required|min:2|max:100|unique:users,full_name',
    			'email'=>'required|email',
    			'phone'=>'required|max:11',
    			'address'=>'required'
    		],
    		[
    			'name.required'=>'Bạn chưa nhập cột họ và tên',
    			'name.min'=>'Tên phải từ 2 - 100 kí tự',
    			'name.max'=>'Tên phải từ 2 - 100 kí tự',
    			'name.unique'=>'Tên đã được sử dụng',
    			'email.required'=>'Bạn chưa nhập email',
    			'email.email'=>'Không đúng định dạng email',
    			'phone.required'=>'Bạn chưa nhập số điện thoại',
    			'phone.max'=>'Số điện thoại không đúng',
    			'address.required'=>'Bạn chưa nhập địa chỉ'
    		]
    	);
    	$user->full_name = $req->name;
    	$user->email = $req->email;
    	$user->phone = $req->phone;
    	$user->address = $req->address;
    	$user->save();

    	return redirect('admin/user/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    //Xóa danh sách món
    public function getXoaUser($id){
    	$user=User::find($id);
    	$user->delete();

    	return redirect('admin/user/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }


    //--------------------------------------------------------------------------------------------------//
	//Danh sách Tin Tức
	//-------------------------------------------------------------------------------------------------//
    public function getDanhSachTin()
    {
    	$new = News::all();
       return view('admin.news.danhsach',['new'=>$new]);
    }

    //Thêm danh sách món
    public function getThemTin()
    {
       return view('admin.news.them');
    }
    public function posttThemTin(Request $request)
    {
    	$this->validate($request,
    		[
    			'name'=>'required|min:5|unique:news,title',
    			'noidung'=>'required',
    			'hinhanh'=>'required'
    		],
    		[
    			'name.required'=>'Bạn chưa nhập tên',
    			'name.min'=>'Tên phải từ 5 kí tự trở lên',
    			'name.unique'=>'Tên đã được sử dụng',
    			'noidung.required'=>'Bạn chưa nhập nội dung',
    			'hinhanh.required'=>'Bạn chưa nhập file'
    		]);
    	$new = new News;
    	$new->title = $request->name;
    	$new->content = $request->noidung;
    	$new->image = $request->hinhanh;
    	$new->save();

    	return redirect('admin/news/them')->with('thongbao','Thêm thành công');
    }

    //Sửa danh Tin Tức
    public function getSuaTin($id)
    {
       $new=News::find($id);
       return view('admin.news.sua',['new'=>$new]);
    }
    public function postSuaTin(Request $req, $id){
    	$new=News::find($id);
    	$this->validate($req,
    		[
    			//để kiểm tra xem có trùng tên không dùng: unique:
    			'name'=>'required|min:2|unique:news,title',
    			'noidung'=>'required',
    			'image'=>'required'
    		],
    		[
    			'name.required'=>'Bạn chưa nhập tên',
    			'name.min'=>'Tên phải từ 2 kí tự trở lên',
    			'name.unique'=>'Tên đã được sử dụng',
    			'noidung.required'=>'Bạn chưa nhập nội dung',
    			'image.required'=>'Bạn chưa chọn hình ảnh mới'
    		]
    	);
    	$new->title = $req->name;
    	$new->content = $req->noidung;
    	$new->image = $req->image;
    	$new->save();

    	return redirect('admin/news/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    //Xóa danh Tin Tức
    public function getXoaTin($id){
    	$new=News::find($id);
    	$new->delete();

    	return redirect('admin/news/danhsach')->with('thongbao','Bạn đã xóa thành công');
    }

}
