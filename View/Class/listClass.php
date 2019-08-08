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
  <div id="home" class="tab-pane fade in active">
    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="page-header clearfix">
           <center><h2>DANH SÁCH LỚP</h2></center>
           <a href="index.php?controller=Class&action=add" class="btn btn-success pull-right" title="Thêm thông tin lớp mới"><i class="fa fa-plus" aria-hidden="true" ></i></a>
         </div>
         <table class='table table-bordered table-striped'>
           <thead>
             <tr>
               <th style="width: 5%">ID</th>
               <th style="width: 10%">TÊN LỚP</th>
               <th style="width: 5%">NIÊN KHÓA</th>
               <th style="width: 5%">TỔNG SỐ SINH VIÊN</th>
               <th style="width: 5%">CHỨC NĂNG KHÁC</th>
             </tr>
           </thead>
           <tbody>
            <?php if (!empty($dslh)): ?>
              <?php foreach ($dslh as $row): ?>
                <tr>
                  <td><?php echo $row['class_id'] ?></td>
                  <td><?php echo $row['ClassName'] ?></td>
                  <td><?php echo $row['SchoolYear'] ?></td>                               
                  <td><?php echo $row['TotalStudent'] ?></td>                               
                  <td>
                    <a href="index.php?controller=Class&action=update&id=<?php echo $row['class_id'] ?>" title="Cập nhật thông tin lớp">Sửa</a> | 
                    <a href="index.php?controller=Class&action=deleteClass&id=<?php echo $row['class_id']; ?>" title="Xóa thông tin lớp">Xóa</a>
                  <?php endforeach ?>
                <?php endif ?>
              </tbody>                            
            </table>
          </div>        
        </div>
      </div>
    </div>
  </header>
</body>
</html>