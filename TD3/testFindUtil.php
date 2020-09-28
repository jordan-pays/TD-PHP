<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> test find utilisateur </title>
    </head>

    <body>
        <?php
        require_once 'Model.php';
        require_once 'Voiture.php';
        require_once 'Utilisateur.php';
        require_once 'Trajet.php';
        $tab_uti=Trajet::findPassagers(3);
        var_dump($tab_uti);
        foreach ($tab_uti as $key){
            $key->afficher();
        }
        ?>
    </body>
</html>
