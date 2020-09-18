<?php
require_once 'Conf.php';
class Model{
	public static $pdo;

	public static function Init(){
		$hostname = Conf::getHostname();
		$database_name = conf::getDatabase();
		$login = conf::getLogin();
		$password = conf::getPassword();
		try {
		self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name", $login, $password,
                     array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		} 
		catch (PDOException $e) {
 			if (Conf::getDebug()) {
   				echo $e->getMessage(); // affiche un message d'erreur
 			} 
 			else {
    			echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
  			}
  			die();
		}

		//self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	}
}
Model::Init()
?>