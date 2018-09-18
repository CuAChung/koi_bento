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
            <td>Họ và tên</td>
            <td>Email</td>
            <td>Số điện thoại</td>
            <td>Địa chỉ</td>
            <td class="action_col">Quản lý?</td>
        </tr>
        @foreach($user as $us)
            <tr class="list_data">
                <td class="aligncenter">{{$us->id}}</td>
                <td class="list_td aligncenter">{{$us->full_name}}</td>
                <td class="list_td aligncenter"><span style="color: red; font-weight: bold;">{{$us->email}}</span></td>
                <td>{{$us->phone}}</td>
                <td>{{$us->address}}</td>
                <td class="list_td aligncenter">
                    <a href="admin/user/sua/{{$us->id}}"><img src="admin_asset/images/edit.png" /></a>&nbsp;&nbsp;&nbsp;
                    <a href="admin/user/xoa/{{$us->id}}"><img src="admin_asset/images/delete.png" /></a>
                </td>
            </tr>
        @endforeach
	</table>
</div>

@endsection