@extends('admin.layout.index')

@section('content')

<div id="main">
		<table class="list_table">
			<tr class="list_heading">
				<td class="id_col">STT</td>
				<td>Danh Mục</td>
				<td class="action_col">Quản lý?</td>
			</tr>
			<tr class="list_data">
                <td class="aligncenter">1</td>
                <td class="list_td alignleft">Vũ Quốc Tuấn</td>
                <td class="list_td aligncenter">
                    <a href=""><img src="images/edit.png" /></a>&nbsp;&nbsp;&nbsp;
                    <a href=""><img src="images/delete.png" /></a>
                </td>
            </tr>
			<tr class="list_data">
                <td class="aligncenter">2</td>
                <td class="list_td alignleft">--| Vũ Quốc Tuấn</td>
                <td class="list_td aligncenter">
                    <a href=""><img src="images/edit.png" /></a>&nbsp;&nbsp;&nbsp;
                    <a href=""><img src="images/delete.png" /></a>
                </td>
            </tr>
			<tr class="list_data">
                <td class="aligncenter">3</td>
                <td class="list_td alignleft">--| --| Vũ Quốc Tuấn</td>
                <td class="list_td aligncenter">
                    <a href=""><img src="images/edit.png" /></a>&nbsp;&nbsp;&nbsp;
                    <a href=""><img src="images/delete.png" /></a>
                </td>
            </tr>
		</table>
	</div>

@endsection