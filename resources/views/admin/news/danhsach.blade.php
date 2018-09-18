@extends('admin.layout.index')

@section('content')

<div id="main">
    @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
        </div>
    @endif

	<table class="list_table">
		<tr class="list_heading">
			<td class="id_col">STT</td>
			<td>Tiêu Đề</td>
            <td>Nội Dung</td>
            <td>Hình ảnh</td>
			<td class="action_col">Quản lý?</td>
		</tr>
         @foreach($new as $pro)
		<tr class="list_data">
            <td class="aligncenter">{{$pro->id}}</td>
            <td class="list_td alignleft">{{$pro->title}}</td>
            <td>{{$pro->content}}</td>
            <td>{{$pro->image}}</td>
            <td class="list_td aligncenter">
                <a href="admin/news/sua/{{$pro->id}}" title="Chỉnh sửa"><img src="admin_asset/images/edit.png" /></a>&nbsp;&nbsp;&nbsp;
                <a href="admin/news/xoa/{{$pro->id}}" title="Xóa mục này"><img src="admin_asset/images/delete.png" /></a>
            </td>
        </tr>
        @endforeach
		
	</table>
</div>

@endsection