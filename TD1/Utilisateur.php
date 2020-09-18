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

	public function __construct($data){
		foreach ($data as $key => $value) {
			$this->$key=$value;
		}
	}

}