<?php 
/**
 * 
 */
class Database
{
	public static $db;
	private static $dsn = 'mysql:host=localhost; dbname=management_student';
	private static $username = 'root';
	private static $password = '';

	public static function connect()
	{
		if (!isset(self::$db)) {
			try {
				self::$db = new PDO(self::$dsn, self::$username, self::$password);
				self::$db->exec("SET CHARACTER SET utf8");
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
			return self::$db;
		}
	}

}
?>