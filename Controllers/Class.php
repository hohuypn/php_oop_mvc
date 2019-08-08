<?php 
/**
 * 
 */
class ClassController
{
	public static function listClass()
	{
		$dslh = ModelClass::getAllClass();
		require_once 'View/Class/listClass.php';
	}

	public static function add()
	{
		if (isset($_POST['addClass'])) {
			$ClassName = $_POST['ClassName'];
			$SchoolYear = $_POST['SchoolYear'];
			$add = ModelClass::InsertClass($ClassName, $SchoolYear);
			if($add) {
				header('location: index.php?controller=Class&action=listClass');
			}else{
				echo "<p style='color: red; text-align: center;'>Thêm thất bại.</p>";
			}
		}
		require_once 'View/Class/addClass.php';
	}

	public static function update()
	{
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			if (isset($_POST['editClass'])) {
				$ClassName = $_POST['ClassName'];
				$SchoolYear = $_POST['SchoolYear'];
				$edit = ModelClass::UpdateClass($id ,$ClassName, $SchoolYear);
				if ($edit) {
					header('location: index.php?controller=Class&action=listClass');
				}else{
					echo "ERROR";
				}
			}else{
				$getID = ModelClass::getDataID($id);
			}
		}
		require_once 'View/Class/editClass.php';
	}

	public static function deleteClass()
	{
		if (isset($_GET['id'])) {
			ModelClass::deleteClassById($_GET['id']);
			header('location: index.php?controller=Class&action=listClass');
		}else{
			header('location:.');
		}
	}

}
?>