<?php
require_once('Model.php');
class ModelVoiture {
  private $marque;
  private $couleur;
  private $immatriculation;
      
  // un getter      
  public function getMarque() {
       return $this->marque;  
  }

  public function getCouleur() {
    return $this->couleur;
  }

  public function getImmatriculation() {
    return $this->immatriculation;
  }
     
  // un setter 
  public function setMarque($marque2) {
       $this->marque = $marque2;
  }
  public function setCouleur($couleur2) {
       $this->couleur = $couleur2;
  }
  public function setImmatriculation($immatriculation2) {
    if(strlen($immatriculation2)<= 8){
       $this->immatriculation = $immatriculation2;
     }
  }
  // La syntaxe ... = NULL signifie que l'argument est optionel
// Si un argument optionnel n'est pas fourni,
//   alors il prend la valeur par défaut, NULL dans notre cas
  public function __construct($m = NULL, $c = NULL, $i = NULL) {
    if (!is_null($m) && !is_null($c) && !is_null($i)) {
      // Si aucun de $m, $c et $i sont nuls,
      // c'est forcement qu'on les a fournis
      // donc on retombe sur le constructeur à 3 arguments
      $this->marque = $m;
      $this->couleur = $c;
      $this->immatriculation = $i;
    }
  }       
  // une methode d'affichage.
  /*public function afficher() {
    echo "La marque de la voiture est $this->marque, d'une couleur $this->couleur, immatriculé $this->immatriculation <br>";
  }*/

  public static function getAllVoitures() {
    $rep = Model::$pdo->query('Select * from voiture');
    $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');;
    return $rep->fetchAll();
  }

  public static function getVoitureByImmat($immat) {
    $sql = "SELECT * from voiture WHERE immatriculation=:nom_tag";
    // Préparation de la requête
    $req_prep = Model::$pdo->prepare($sql);

    $values = array(
        "nom_tag" => $immat,
      //nomdutag => valeur, ...
    );
    // On donne les valeurs et on exécute la requête
    $req_prep->execute($values);

    // On récupère les résultats comme précédemment
    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
    $tab_voit = $req_prep->fetchAll();
    // Attention, si il n'y a pas de résultats, on renvoie false
    if (empty($tab_voit))
      return false;
    return $tab_voit[0];
  }

  public function save(){
    $sql = "INSERT INTO voiture VALUES (:immat,:marque,:couleur)";
    try {
      $req_prep = Model::$pdo->prepare($sql);
      $value = array(
          "immat"=>$this->immatriculation,
          "marque"=>$this->marque,
          "couleur"=>$this->couleur,
      );
      $req_prep->execute($value);
      return true;
    }
    catch (PDOException $e) {
      if($e->getCode()==23000){
        return false;
      }else {
        echo $e->getMessage();
      }
      die();
    }
  }
}
?>

