<html>
<head>
	<meta charset="UTF-8">
	<title>Thêm thông tin lớp</title>
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
						<h3 style="text-align: center;">THÔNG TIN THÊM LỚP</h3>
						</div>
						<form action="" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label>Tên sinh viên</label>
								<select class="form-control" name="ClassName">
									<option value="17PNV1A">17PNV1A</option>
									<option value="17PNV1B">17PNV1B</option>
									<option value="18PNV1A">18PNV1A</option>
									<option value="18PNV1B">18PNV1B</option>
									<option value="19PNV1A">19PNV1A</option>
									<option value="19PNV1B">19PNV1B</option>
								</select>
							</div>
							<div class="form-group">
								<label>Ngày sinh</label>
								<select class="form-control" name="SchoolYear">
									<option value="2014 - 2017">2014 - 2017</option>
									<option value="2015 - 2018">2015 - 2018</option>
									<option value="2016 - 2019">2016 - 2019</option>
									<option value="2017 - 2020">2017 - 2020</option>
									<option value="2018 - 2021">2018 - 2021</option>
								</select>
							</div>
							<input type="submit" name = "addClass"class="btn btn-primary" value="Thêm">
							<a href="index.php?controller=Class&action=listClass" class="btn btn-default">Thoát</a>
						</form>
					</div>
				</div>        
			</div>
		</div>
	</body>
	</html>