<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Liste des Voitures :</title>
    </head>
   
    <body>
        <?php
        require_once("Voiture.php");
        $voiture1 = new Voiture("Citroen","bleu","543FJF487");
        echo $voiture1->afficher();
        ?>
    </body>
</html> 