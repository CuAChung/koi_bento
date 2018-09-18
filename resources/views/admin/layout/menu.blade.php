	<div id="menu">
		<table width="100%">
			<tr>
				<td>
					<a href="admin/quan_tri_vien">Trang chính</a> | <a href="admin/user/danhsach">Quản lý user</a> | <a href="admin/product/danhsach">Quản lý danh mục</a> | <a href="admin/news/danhsach">Quản lý tin</a>
				</td>
				<td align="right">
					@if(Auth::check())
                        <a href=""><i class="fa fa-user"></i>Xin chào: {{Auth::user()->full_name}}</a>
                        <a href="admin/login" style="margin-left: 10px;"><i class="fa fa-logout"></i> Đăng xuất</a>
                    @else
                       <a href="{{route('dangnhap')}}">Login</a>
                    @endif
				</td>
			</tr>
		</table>
	</div>