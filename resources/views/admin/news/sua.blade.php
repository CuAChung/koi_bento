@extends('admin.layout.index')

@section('content')

<div id="main">
	<form action="admin/news/sua/{{$new->id}}" method="POST" style="width: 650px;">
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
			
			<span class="form_label">Tiêu đề:</span>
			<span class="form_item">
				<input type="text" name="name" class="textbox" value="{{$new->title}}" />
			</span><br />

			<span class="form_label">Nội dung:</span>
			<span class="form_item">
				<textarea class="textbox" name="noidung">{{$new->content}}</textarea>
			</span><br />

			<span class="form_label">Hình ảnh:</span>
			<span class="form_item">
				<input type="text" name="image" class="textbox" value="{{$new->image}}" />
			</span><br />

			<span class="form_label"></span>
			<span class="form_item">
				<input type="submit" name="btnCateEdit" value="Sửa danh mục" class="button" />
			</span>
		</fieldset>
	</form>  
</div>	

@endsection