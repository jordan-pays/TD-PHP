<?php
require_once 'Conf.php';
class Model{
	public static $pdo;

	public static function Init(){
		$hostname = Conf::getHostname();
		$database_name = conf::getDatabase();
		$login = conf::getLogin();
		$password = conf::getPassword();
		self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name", $login, $password,
                     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

		self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	}
}
Model::Init()
?>