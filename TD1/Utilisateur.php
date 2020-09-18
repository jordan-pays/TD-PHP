<?php
class Utilisateur{
	private $login;
	private $nom;
	private $prenom;

	public function getUtilisateur($nom_attribut){
		$objet->$nom_attribut;
	}

	public function setUtilisateur($nom_attribut, $valeur){
		$this->$nom_attribut = $valeur;
	}

	public function __construct($data = null){
		if(!is_null($data)) {
			foreach ($data as $key => $value) {
			$this->$key=$value;
			}
		}
	}
		
	public static function getAllUtilisateurs() {
    	$rep = Model::$pdo->query('Select * from Utilisateur');
   		$rep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');;
    	return $rep->fetchAll();
	}

}