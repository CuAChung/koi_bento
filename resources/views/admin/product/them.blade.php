@extends('admin.layout.index')
@section('content')

	<div id="main">
		<form action="admin/product/them" method="POST" style="width: 650px;">
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
				<span class="form_label">Tên danh mục:</span>
				<span class="form_item">
					<input type="text" name="name" class="textbox" />
				</span><br />
				
				<span class="form_label">Mô tả sản phẩm:</span>
				<span class="form_item">
					<textarea class="textbox" name="mota"></textarea>
				</span><br />

				<span class="form_label">Giá gốc:</span>
				<span class="form_item">
					<input type="text" name="gia" class="textbox" />
				</span><br />
				
				<span class="form_label">Hình ảnh:</span>
				<span class="form_item">
					<input type="file" name="hinhanh" class="textbox" />
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