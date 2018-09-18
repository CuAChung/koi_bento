@extends('admin.layout.index')
@section('content')

	<div id="main">
		<form action="admin/user/them" method="POST" style="width: 650px;">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Thông Tin Danh Mục</legend>
					@if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
								{{$err}}<br>
							@endforeach
						</div>
					@endif

					@if(session('thongbao'))
						<div class="alert alert-success">
							{{session('thongbao')}}
						</div>
					@endif
				<!-- <span class="form_label">Danh mục cha:</span>
				<span class="form_item">
					<select name="sltCate" class="select">
						<option value="0">--- ROOT ---</option>
						<option value="29">---| Món mới</option>
						<option value="22">Giải trí</option>
						<option value="18">Thông tin</option>
						<option value="20">Sản phẩm</option>
					</select>
				</span><br /> -->
				<span class="form_label">Họ và tên:</span>
				<span class="form_item">
					<input type="text" name="name" class="textbox" />
				</span><br />
				<span class="form_label">Email:</span>
				<span class="form_item">
					<input type="text" name="email" class="textbox" />
				</span><br />
				<span class="form_label">Mật khẩu:</span>
				<span class="form_item">
					<input type="text" name="password" class="textbox" />
				</span><br />
				<span class="form_label">Số điện thoại:</span>
				<span class="form_item">
					<input type="text" name="phone" class="textbox" />
				</span><br />
				<span class="form_label">Địa chỉ:</span>
				<span class="form_item">
					<input type="text" name="address" class="textbox" />
				</span><br />
				<span class="form_label"></span>
				<span class="form_item">
					<input type="submit" name="btnCateAdd" value="Thêm danh mục" class="button" />
					<input type="reset" name="btnCateAdd" value="Làm mới" class="button" />
				</span>
			</fieldset>
		</form>  
	</div>

@endsection