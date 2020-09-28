<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Liste des Voitures :</title>
    </head>
   
    <body>
    	 <?php
         require_once('Model.php');
        require_once('Voiture.php');
        $voiture1 = new Voiture($_POST['marque'],$_POST['couleur'],$_POST['immatriculation']);
        $voiture1->save();
        ?>
    </body>
</html>