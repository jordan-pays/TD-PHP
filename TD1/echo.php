<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Liste des Voitures :</title>
    </head>
   
    <body>
        <?php
        $voitures = array();
        $voiture = array ( 
          'immatriculation' => 'ZYE587RGU',
          'marque' => 'audi',
          'couleur' => 'rouge'
        );
        $voiture1 = array ( 
          'immatriculation' => '484DSFG',
          'marque' => 'clio',
          'couleur' => 'noir'
        );
        $voiture2 = array ( 
          'immatriculation' => '54DEIJ',
          'marque' => 'BMW',
          'couleur' => 'Blanche'
        );
        /*$voitures[] = $voiture;
        $voitures[] = $voiture1;
        $voitures[] = $voiture2;*/
        if (empty($voitures)){
          echo "Il n’y a aucune voiture";
        }
        echo "<ul>";
        foreach ($voitures as $voiture ) {
          foreach ($voiture as $key => $value) {
         echo "<li> $key : $value </li>"; 
        }
       echo "<br>";
      }
       echo "</ul>";
        ?>
    </body>
</html> 