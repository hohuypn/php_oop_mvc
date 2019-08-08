<?php if(isset($_GET['action'])&&$_GET['action']!='search'): ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP MVC thuần</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Public/asset/css/style.css">
</head>
<body>

	<?php
	endif; 
		require_once('config/database.php'); // Kết nối Database thành công!
		//$conn = Database::connect(); Cú pháp kiểm tra kết nối thành công hay chưa.
		if (isset($_GET['controller'], $_GET['action'])) {
			$controller = $_GET['controller'];
			$action = $_GET['action'];
		}else{
			$controller = 'Home';
			$action = 'index';
		}
		include 'View/routes.php';
		?>
		<?php if(isset($_GET['action'])&&$_GET['action']!='search'): ?>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</html>
	<?php endif ?>