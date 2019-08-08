<?php 
/**
 * 
 */
class Student
{  
	// Phương thức show ra tất cả sinh viên
	public static function listStudent()
	{
		$dshs = ModelStudent::getAllStudent();
		require_once 'View/Student/listStudent.php';
	}


	// Phương thức thêm sinh viên mới
	public static function add(){
		if (isset($_POST['addStudent']))/*Kiểm tra addStudent có tồn tại hay không*/ {
			move_uploaded_file($_FILES["Image"]["tmp_name"], "Public/asset/image/" . $_FILES["Image"]["name"]);
			if (isset($_FILES['Image'])) {
				if ($_FILES['Image']['error'] > 0)
					echo "Upload lỗi rồi!";
				else {
					move_uploaded_file($_FILES["Image"]["tmp_name"], "Public/asset/image/" . $_FILES["Image"]["name"]);
				}
			}
			$Name = $_POST['Name']; //Gán $Name bằng Name trong View
			$BOD = $_POST['BOD']; //Gán $BOD bằng BOD trong View
			$Gender = $_POST['Gender']; //Gán $Gender bằng Gender trong View
			$Address = $_POST['Address']; //Gán $Address bằng Address trong View
			$Phone = $_POST['Phone']; //Gán $Phone bằng Phone trong View
			$Image = 'Public/asset/image/'.$_FILES['Image']['name']; //Gán $Image trỏ tới thu mục chứa ảnh trong View
			$ClassID = $_POST['ClassID'];
			$add = ModelStudent::InsertDataStudent($Name, $BOD, $Gender, $Address, $Phone, $Image, $ClassID);
			if($add){// Nếu $add  = 0 thì echo ra Thêm thất bại.
				echo "<p style='color: red;'>Thêm thất bại.</p>";
			}else{
				// Nếu $add = 1 thì chuyển hướng tới trang listStudent
				header('location: index.php?controller=Student&action=listStudent');
			}
		}
		$addNameClass = ModelStudent::get_class(); // Hàm này chính là để show ra tên lớp thay vì ID
		require_once 'View/Student/addStudent.php'; //Gọi file addStudent.php
	}


	// Phương thức sửa thông tin sinh viên
	public static function edit()
	{
		// Đầu tiên kiểm tra id có tồn tại hay không rồi gám $id bằng id để show ra tất cả dữ liệu trước đó của id đó
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$Image=null; // Đặt hình ảnh là null nếu người dùng không muốn upload ảnh mới
			if (isset($_POST['editStudent'])) { // Kiểm tra xem editStudent có tồn tại không? editStudent là tên button submit trong view
				if (!empty($_FILES['Image']['name']) && isset($_FILES['Image']['name'])) {
					if ($_FILES['Image']['error'] > 0){
						echo "Upload lỗi rồi!";
					}
					else {
						move_uploaded_file($_FILES["Image"]["tmp_name"], "Public/asset/image/" . $_FILES["Image"]["name"]);
						$Image = 'Public/asset/image/'.$_FILES['Image']['name'];
					}
				}
				$Name = $_POST['Name'];
				$BOD = $_POST['BOD'];
				$Gender = $_POST['Gender'];
				$Address = $_POST['Address'];
				$Phone = $_POST['Phone'];
				$ClassID = $_POST['ClassID'];
				$edit = ModelStudent::editDataStudent($id ,$Name, $BOD, $Gender, $Address, $Phone, $Image, $ClassID);
				if($edit){
					header('location: index.php?controller=Student&action=listStudent');
				}else{
					echo "Error";
				}
			}else{
				// $editName = ModelStudent::get_class();
				// echo "<pre>";
				// print_r($editName);
				$export = ModelStudent::getDataId($id); // Gọi thằng này để show ra tất cả dữ liệu có $id = $_GET['id'].
			}
		}
		require_once 'View/Student/editStudent.php'; // Gọi file editStudent.php từ view
	}


	// Phương thức tìm kiếm
	public static function search()
	{
		$key = $_POST['tukhoa']; // Gán $key = tukhoa, tukhoa là giá trị mà người dùng nhập vào  
		$search = ModelStudent::searchData($key); // gán biến $search - function tìm kiếm lấy từ ModelStudent
		require_once 'View/Student/SearchStudent.php'; // Gọi file SearchStudent.php
	}

	// Phương thức xóa sinh viên theo id 
	public static function delete(){
		if (isset($_GET['id'])) {
			ModelStudent::deleteStudentById($_GET['id']);
			header('location: index.php?controller=Student&action=listStudent');
		}else{
			header('location:.');
		}
	}
}
?>