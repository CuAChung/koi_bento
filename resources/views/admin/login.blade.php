<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="QuocTuan.Info" />
    <!-- base khai báo dường đẫn mặc định -->
    <base href="{{asset('')}}" > 
    <link rel="stylesheet" href="admin_asset/templates/css/style.css" />
	<title>Admin Area :: Login</title>
</head>
<body>
<div id="layout">
    <div id="top">
        Admin Area :: Login
    </div>
    <div id="main">        
		<form action="admin/login" method="POST" style="width: 650px; margin: 30px auto;">
            <fieldset>
                <legend>Thông Tin Đăng Nhập</legend>    
                <input type="hidden" name="_token" value="{{ csrf_token() }}">            
				<table>
                    <tr>
                        <td class="login_img"></td>
                        <td>
                            <span>
                                @if(Session::has('flag'))
                                    <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                                @endif
                            </span>
                            <span class="form_label">Email:</span>
                            <span class="form_item">
                                <input type="text" name="email" class="textbox" />
                            </span><br />
                            <span class="form_label">Password:</span>
                            <span class="form_item">
                                <input type="password" name="password" class="textbox" />
                            </span><br />
                            <span class="form_label"></span>
                            <span class="form_item">
                                <input type="submit" name="btnLogin" value="Đăng nhập" class="button" />
                            </span>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
    <div id="bottom">
       Admin © 2018 by achung.edu.vn
    </div>
</div>

</body>
</html>