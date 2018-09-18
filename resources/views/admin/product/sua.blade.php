@extends('admin.layout.index')

@section('content')

<div id="main">
	<form action="admin/product/sua/{{$product->id}}" method="POST" style="width: 650px;">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<fieldset>
			<legend>Chỉnh Sửa Danh Mục</legend>
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
					<option value="29">---| Chuyện lạ</option>
					<option value="22">Giải trí</option>
					<option value="18">Giáo dục</option>
					<option value="20">Kinh doanh</option>
					<option value="19">---| Nhân ái</option>
					<option value="24">---| ---| Nhịp sống trẻ</option>
					<option value="23">Pháp luật</option>
					<option value="28">Sự kiện</option>
					<option value="26">Sức khỏe</option>
					<option value="27">Sức mạnh số</option>
					<option value="16">Thế giới</option>
					<option value="17">Thể thao</option>
					<option value="25">Tình yêu</option>
					<option value="21">Văn hóa</option>
					<option value="15">Xã hội</option>
				</select>
			</span><br /> -->
			<span class="form_label">Tên danh mục:</span>
			<span class="form_item">
				<input type="text" name="name" class="textbox" value="{{$product->name}}" />
			</span><br />

			<span class="form_label">Mô tả sản phẩm:</span>
			<span class="form_item">
				<textarea class="textbox" name="mota">{{$product->description}}</textarea>
			</span><br />

			<span class="form_label">Giá gốc:</span>
			<span class="form_item">
				<input type="text" name="gia" class="textbox" value="{{$product->unit_price}}" />
			</span><br />

			<span class="form_label">Hình ảnh:</span>
			<span class="form_item">
				<input type="text" name="gia" class="textbox" value="{{$product->image}}" />
			</span><br />

			<span class="form_label"></span>
			<span class="form_item">
				<input type="submit" value="Sửa danh mục" class="button" />
				<input type="reset" value="Làm mới" class="button" />
			</span>
		</fieldset>
	</form>  
</div>	

@endsection