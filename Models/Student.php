<?php 
/**
 * 
 */
class ModelStudent extends Model
{
	// Phương thức lấy tất cả dữ liệu trong bảng sinh viên được gọi về từ Model
	public static function getAllStudent()
	{
		return parent::getDataStudent('student');
	}
	// Phương thức xóa dữ liệu sinh viên theo id 
	public static function getDataStudentById($id)
	{
		return parent::getDataStudentId('student', 'id', $id);
	}
	// Phương thức thêm sinh viên mới
	public static function InsertDataStudent($Name, $BOD, $Gender, $Address, $Phone, $Image, $ClassID)
	{
		$db = Database::connect();

		$sql = "INSERT INTO student(Name, BOD, Gender, Address, Phone, Image, ClassID) VALUES('$Name', '$BOD', '$Gender', '$Address', '$Phone', '$Image', '$ClassID')";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$stmt->closeCursor();

		return $result;
	}

	// Phương thức lấy id và ClassName từ bảng class
	public static function get_class()
	{
		$db = Database::connect();

		$sql = "SELECT id AS class_id, ClassName FROM class";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
		return $result;
	}

	// Phương thức lấy dữ liệu theo id
	public static function getDataId($id)
	{
		$db = Database::connect();

		$sql = "SELECT * FROM student WHERE id = '$id'";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$stmt->closeCursor();

		return $result;
	}

	// Phương thức sửa dữ liệu sinh viên
	public static function editDataStudent($id ,$Name, $BOD, $Gender, $Address, $Phone, $Image=null, $ClassID)
	{
		$db = Database::connect();
		if($Image==null){
		$sql = "UPDATE student SET Name = '$Name', BOD = '$BOD', Gender = '$Gender', Address = '$Address', Phone = '$Phone', ClassID = '$ClassID' WHERE id = $id";
		}else{
			$sql = "UPDATE student SET Name = '$Name', BOD = '$BOD', Gender = '$Gender', Address = '$Address', Phone = '$Phone', Image = '$Image', ClassID = '$ClassID' WHERE id = $id";
		}
		$stmt = $db->prepare($sql);
		$result = $stmt->execute();
		$stmt->closeCursor();
		return $result;
	}

	// Phương thức tìm kiếm dữ liệu
	public static function searchData($key)
	{
		$db = Database::connect();

		$sql = "SELECT student.id as student_id,student.Name,student.BOD,student.Gender,student.Address,student.Phone,student.Image,student.name,class.ClassName,class.id as Class_id FROM student INNER JOIN class ON student.ClassID = class.id WHERE Name LIKE '%$key%' OR class.ClassName LIKE '%$key%' ORDER BY student.id";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$stmt->closeCursor();

		return $result;
	}

	// Phương thức xóa sinh viên theo id
	public static function deleteStudentById($id)
	{
		parent::delete('student', 'id', $id);
	}
}
?>