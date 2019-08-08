<?php 
/**
 * 
 */
class Model
{
	
	public static function getDataStudent()
	{
		$db = Database::connect();

		$sql = "SELECT student.id as student_id,student.Name,student.BOD,student.Gender,student.Address,student.Phone,student.Image,student.name,class.ClassName,class.id as Class_id FROM student INNER JOIN class ON student.ClassID = class.id ORDER BY student.id";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$stmt->closeCursor();

		return $result;
	}
	public static function getDataClass()
	{
		$db =Database::connect();

		$sql = "SELECT class.id AS class_id, class.ClassName, class.SchoolYear,  COUNT(student.ClassID) AS TotalStudent FROM class LEFT JOIN  student ON class.id=student.ClassID GROUP BY class.id";

		$stmt = $db->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$stmt->closeCursor();

		return $result;
	}

	public static function delete($table, $column, $value)
	{
		$db = Database::connect();

		$sql = "DELETE FROM $table WHERE $column = :value";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':value', $value);
		$stmt->execute();
		$stmt->closeCursor();
	}
}

?>