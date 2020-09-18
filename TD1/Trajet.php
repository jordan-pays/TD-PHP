<?php
class Trajet{
	private $id;
	private $depart;
	private $arrivee;
	private $date;
	private $nbplaces;
	private $prix;
	private $conducteur;

	public function getTrajet($nom_attribut){
		$objet->$nom_attribut;
	}

	public function setTrajet($nom_attribut, $valeur){
		$this->$nom_attribut = $valeur;
	}

	public function __construct($data){
		foreach ($data as $key => $value) {
			$this->$key=$value;
		}
	}
}