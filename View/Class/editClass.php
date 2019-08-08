<html>
<head>
	<meta charset="UTF-8">
	<title>Sửa lớp</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php foreach ($getID as $row): ?>
						<div class="page-header">
							<h3 style="text-align: center;">CẬP NHẬT THÔNG TIN LỚP</h3>
						</div>
						<form action="index.php?controller=Class&action=update&id=<?=$_GET['id']?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Tên lớp</label>
								<input type="text" name="ClassName" class="form-control" value="<?php echo $row['ClassName'] ?>">
								<span class="help-block"></span>
							</div>
							<div class="form-group">
								<label>Niên khóa</label>
								<input type="text" name="SchoolYear" class="form-control" value="<?php echo $row['SchoolYear'] ?>">
								<span class="help-block"></span>
							</div>
							<input type="hidden" name="id" value="<?php echo $id; ?>"/>
							<input type="submit" name = "editClass"class="btn btn-primary" value="Cập nhật">
							<a href="index.php?controller=Class&action=listClass" class="btn btn-default">Thoát</a>
						</form>
					<?php endforeach ?>
				</div>
			</div>        
		</div>
	</div>
</body>
</html>