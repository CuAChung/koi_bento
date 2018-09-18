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
			<td>TÊN SẢN MÓN</td>
            <td>GIÁ GỐC</td>
			<td class="action_col">Quản lý?</td>
		</tr>
        @foreach($product as $pro)
		<tr class="list_data">
            <td class="aligncenter">{{$pro->id}}</td>
            <td class="list_td alignleft">{{$pro->name}}</td>
            <td>{{$pro->unit_price}}</td>
            <td class="list_td aligncenter">
                <a href="admin/product/sua/{{$pro->id}}" title="Chỉnh sửa"><img src="admin_asset/images/edit.png" /></a>&nbsp;&nbsp;&nbsp;
                <a href="admin/product/xoa/{{$pro->id}}" title="Xóa mục này"><img src="admin_asset/images/delete.png" /></a>
            </td>
        </tr>
        @endforeach
	</table>
</div>

@endsection