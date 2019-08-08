<html>
<head>
	<meta charset="UTF-8">
	<title>Sửa thông tin sinh viên</title>
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
						<h3 style="text-align: center;">CẬP NHẬT SINH VIÊN</h3>
					</div>
					<?php foreach ($export as $row): ?>
						<form action="" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label>Tên sinh viên</label>
								<input type="text" name="Name" class="form-control" value="<?php echo $row['Name']; ?>">
								<span class="help-block"></span>
							</div>
							<div class="form-group">
								<label>Ngày sinh</label>
								<input type="Date" name="BOD" class="form-control" value="<?php echo $row['BOD']; ?>">
								<span class="help-block"></span>
							</div>
							<div class="form-group">
								<label>Giới tính</label>
								<select class="form-control" name="Gender" value="<?php echo $row['Gender']; ?>">
									<option value="Nam" <?=($row['Gender']=='Nam')?'selected':''?>>Nam</option>                                                          
									<option value="Nữ" <?=($row['Gender']=='Nữ')?'selected':''?>>Nữ</option>                                                          
								</select>
								<span class="help-block"></span>
							</div>
							<div class="form-group">
								<label>Địa chỉ</label>
								<input type="text" name="Address" class="form-control" value="<?php echo $row['Address']; ?>">
								<span class="help-block"></span>
							</div>
							<div class="form-group">
								<label>Số điện thoại</label>
								<input type="number" name="Phone" class="form-control" value="<?php echo $row['Phone']; ?>">
								<span class="help-block"></span>
							</div>
							<div class="form-group">
								<label>Hình ảnh</label>

								<input type="file" name="Image" id="input" class="form-control">
								<img src="<?php echo $row['Image']; ?>" heigh=100px width=100px>
							</div>
							<div class="form-group">
								<label>Lớp</label>
								<input type="number" name="ClassID" class="form-control" value="<?php echo $row['ClassID']; ?>">
							</div>
							<input type="hidden" name="id" value="<?php echo $id; ?>"/>
							<input type="submit" name = "editStudent"class="btn btn-primary" value="Cập nhật">
							<a href="index.php?controller=Student&action=listStudent" class="btn btn-default">Thoát</a>
						</form>
					<?php endforeach ?>
				</div>
			</div>        
		</div>
	</div>
</body>
</html>