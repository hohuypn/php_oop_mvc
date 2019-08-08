
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Public/asset/css/style.css">
</head>
<body>
	<header class="home" id="home">
		<div class="col-md-12">
			<div class="container">
				<nav class="navbar">
					<div class="navbar-header">
						<a class="navbar-brand" href="#"><img src="Public/asset/image/logo.png" width="160" height="50"></a>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">							
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                                                
						</button>
						<a class="navbar-brand" href="#myPage"></a>
					</div>
					<div class="collapse navbar-collapse navbar-fluid navbar-right" id="myNavbar">
						<ul class="nav navbar-nav">
							<li><a href="index.php" class="<?php echo !isset($_GET['controller'])? 'active' :null ?>">HOME</a></li>
							<li><a href="index.php?controller=Student&action=listStudent" class="<?php echo (isset($_GET['controller']) and $_GET['controller']==='Student')? 'active' : null ?>">STUDENT</a></li>
							<li><a href="index.php?controller=Class&action=listClass" class="<?php echo (isset($_GET['controller']) and $_GET['controller']==='Class')? 'active' : null ?>">CLASS</a></li>
						</ul>
					</div>					
				</nav>
			</div>
		</div>
	</header>
	<main>
		<?php 
		include 'View/routes.php';
		?>
	</main>
</body>
</html>