@extends('admin.layout.index')
@section('content')

	<div id="main">
		<form action="admin/news/them" method="POST" style="width: 650px;">
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

				<span class="form_label">Tên Tin:</span>
				<span class="form_item">
					<input type="text" name="name" class="textbox" />
				</span><br />
				
				<span class="form_label">Nội Dung Tin:</span>
				<span class="form_item">
					<textarea class="textbox" name="noidung"></textarea>
				</span><br />
				
				<span class="form_label">Hình Ảnh Tin:</span>
				<span class="form_item">
					<input type="file" name="hinhanh" class="textbox" />
				</span><br />
				<span class="form_label"></span>
				<span class="form_item">
					<input type="submit" name="btnCateAdd" value="Thêm Tin Tức" class="button" />
					<input type="reset" name="btnCateAdd" value="Làm mới" class="button" />
				</span>
			</fieldset>
		</form>  
	</div>

@endsection