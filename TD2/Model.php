<?php
require_once 'Conf.php';
class Model{
	public static $pdo;

	public static function Init(){
		$hostname = Conf::getHostname();
		$database_name = conf::getDatabase();
		$login = conf::getLogin();
		$password = conf::getPassword();
		self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name",$login,$password);
	}
}
Model::Init()
?>