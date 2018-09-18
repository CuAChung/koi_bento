<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="QuocTuan.Info" />
    <!-- base khai báo dường đẫn mặc định -->
    <base href="{{asset('')}}" > 
    <link rel="stylesheet" href="admin_asset/templates/css/style.css" />
	<title>Admin Area :: Trang chính</title>
</head>

<body>
<div id="layout">
    	@include('admin.layout.header')
   
		@yield('content')

	<div id="bottom">
        Admin © 2018 by achung.edu.vn 
    </div>
</div>
</body>
</html>