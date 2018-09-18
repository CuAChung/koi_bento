@extends('admin.layout.index')

@section('content')

<div id="main">
	<form action="admin/user/sua/{{$user->id}}" method="POST" style="width: 650px;">
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
			<span class="form_label">Họ và tên:</span>
			<span class="form_item">
				<input type="text" name="name" class="textbox" value="{{$user->full_name}}" />
			</span><br />

			<span class="form_label">Email:</span>
			<span class="form_item">
				<textarea class="textbox" name="email">{{$user->email}}</textarea>
			</span><br />

			<span class="form_label">Số điện thoại:</span>
			<span class="form_item">
				<input type="text" name="phone" class="textbox" value="{{$user->phone}}" />
			</span><br />

			<span class="form_label">Địa chỉ:</span>
			<span class="form_item">
				<input type="text" name="address" class="textbox" value="{{$user->address}}" />
			</span><br />

			<span class="form_label"></span>
			<span class="form_item">
				<input type="submit" name="btnCateEdit" value="Sửa danh mục" class="button" />
			</span>
		</fieldset>
	</form>  
</div>	

@endsection