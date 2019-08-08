<html>
<head>
	<meta charset="UTF-8">
	<title>Thêm thông tin sinh viên</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-header">
						<h3 style="text-align: center;">THÔNG TIN THÊM SINH VIÊN</h3>
					</div>
					<form action="index.php?controller=Student&action=add" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label>Tên sinh viên</label>
							<input type="text" name="Name" class="form-control" required>
							<span class="help-block"></span>
						</div>
						<div class="form-group">
							<label>Ngày sinh</label>
							<input type="Date" name="BOD" class="form-control" required>
							<span class="help-block"></span>
						</div>
						<div class="form-group">
							<label>Giới tính</label>
							<select class="form-control" name="Gender" required>
								<option value="Nam">Nam</option>                                                          
								<option value="Nữ">Nữ</option>                                                          
							</select>
							<span class="help-block"></span>
						</div>
						<div class="form-group">
							<label>Địa chỉ</label>
							<input type="text" name="Address" class="form-control" required>
							<span class="help-block"></span>
						</div>
						<div class="form-group">
							<label>Số điện thoại</label>
							<input type="number" name="Phone" class="form-control" required>
							<span class="help-block"></span>
						</div>
						<div class="form-group">
							<label>Hình ảnh</label>

							<input type="file" name="Image" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Lớp</label>
							<select name="ClassID" class="form-control">
								<?php 

								foreach ($addNameClass as $key) {
									?><option name="ClassID" value="<?php echo $key['class_id'] ?>"><?php echo $key['ClassName'] ?></option> <?php 
								}
								 ?>
							</select>
						</div>
						<input type="submit" name = "addStudent"class="btn btn-primary" value="Thêm">
						<a href="index.php?controller=Student&action=listStudent" class="btn btn-default">Thoát</a>
					</form>
				</div>
			</div>        
		</div>
	</div>
</body>
</html>