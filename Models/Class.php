<?php 
/**
 * 
 */
class ModelClass extends Model
{
	public static function getAllClass()
	{
		return parent::getDataClass('class');
	}

	public static function InsertClass($ClassName, $SchoolYear)
	{
		$db = Database::connect();
		$sql = "INSERT INTO class(ClassName, SchoolYear,TotalStudent) VALUES('$ClassName', '$SchoolYear',0)";
		$stmt = $db->prepare($sql);
		$result =  $stmt->execute();

		return $result;
	}

	public static function getDataID($id)
	{
		$db = Database::connect();

		$sql = "SELECT * FROM class WHERE id  = '$id'";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$stmt->closeCursor();

		return $result;
	}

	public static function UpdateClass($id ,$ClassName, $SchoolYear)
	{
		$db = Database::connect();

		$sql = "UPDATE class SET ClassName = '$ClassName', SchoolYear = '$SchoolYear' WHERE id  = $id";
		$stmt = $db->prepare($sql);
		 $result=$stmt->execute();

		return $result;
	}

	public static function deleteClassById($id)
	{
		parent::delete('class', 'id', $id);
	}
}
 ?>