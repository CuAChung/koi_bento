@extends('admin.layout.index')
@section('content')

	<div id="main">
		<form action="" method="POST" style="width: 650px;">
			<fieldset>
				<legend>Thông Tin Danh Mục</legend>
				<span class="form_label">Danh mục cha:</span>
				<span class="form_item">
					<select name="sltCate" class="select">
						<option value="0">--- ROOT ---</option>
						<option value="29">---| Món mới</option>
						<option value="22">Giải trí</option>
						<option value="18">Thông tin</option>
						<option value="20">Sản phẩm</option>
					</select>
				</span><br />
				<span class="form_label">Tên danh mục:</span>
				<span class="form_item">
					<input type="text" name="txtCateName" class="textbox" />
				</span><br />
				<span class="form_label"></span>
				<span class="form_item">
					<input type="submit" name="btnCateAdd" value="Thêm danh mục" class="button" />
				</span>
			</fieldset>
		</form>  
	</div>

@endsection