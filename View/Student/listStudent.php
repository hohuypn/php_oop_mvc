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
    <div id="home" class="tab-pane fade in active">
      <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="page-header clearfix">
             <center><h2>DANH SÁCH SINH VIÊN</h2></center>
             <a href="index.php?controller=Student&action=add" class="btn btn-success pull-right" title="Thêm thông tin lớp mới"><i class="fa fa-plus" aria-hidden="true" ></i></a>
             <form role="search">
              <div class="form-group">
                <input style="text-align: center;" type="text" id="txtsearch" class="form-control" placeholder="Bạn có thể tìm kiếm theo tên sinh viên hoặc theo tên lớp...">
              </div>
            </form>
          </div>
          <table class='table table-bordered table-striped'>
           <thead>
             <tr>
              <th style="text-align: center;">ID</th>
              <th style="text-align: center;">TÊN SINH VIÊN</th>
              <th style="text-align: center;">NGÀY SINH</th>
              <th style="text-align: center;">GIỚI TÍNH</th>
              <th style="text-align: center;">ĐỊA CHỈ</th>
              <th style="text-align: center;">SĐT</th>
              <th style="text-align: center;">HÌNH ẢNH</th>
              <th style="text-align: center;">TÊN LỚP</th>
              <th style="width: 15%;">CHỨC NĂNG KHÁC</th>
            </tr>
          </thead>
          <tbody id="dataSearch">
            <?php if (!empty($dshs)): ?>
              <?php foreach ($dshs as $row): ?>
                <tr>
                  <td style="text-align: center;"><?php echo $row['student_id'] ?></td>
                  <td style="text-align: center;"><?php echo $row['Name'] ?></td>
                  <td style="text-align: center;"><?php echo $row['BOD'] ?></td>                               
                  <td style="text-align: center;"><?php echo $row['Gender'] ?></td>
                  <td style="text-align: center;"><?php echo $row['Address'] ?></td>
                  <td style="text-align: center;"><?php echo $row['Phone'] ?></td>
                  <td style="text-align: center;"> <?php echo "<img  src='" . $row['Image'] . "' heigh='100px' width='100px'>" ?></td>
                  <td style="text-align: center;"><?php echo $row['ClassName'] ?></td>
                  <td style="text-align: center;">
                    <a  href="index.php?controller=Student&action=edit&id=<?php echo $row['student_id'] ?>" title="Cập nhật thông tin sinh viên">Sửa</span></a> |
                    <a onclick="return confirm('Bạn có chắc chẵn muốn xóa không?')" href="index.php?controller=Student&action=delete&id=<?php echo $row['student_id']; ?>" title="Xóa thông tin sinh viên">Xóa</a>
                  </td>
                </tr>
              <?php endforeach ?>
            <?php endif ?>
          </tbody>                            
        </table>
      </div>        
    </div>
  </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#txtsearch').keyup(function(){
      var keyword = $('#txtsearch').val();
      $.post('index.php?controller=Student&action=search', {tukhoa: keyword}, function(data){
        $('#dataSearch').html(data);
      })
    })
  })
</script>
</html>
