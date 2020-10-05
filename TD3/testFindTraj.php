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
            $tab_traj=Utilisateur::findTrajets($_GET['utilisateur']);
            foreach ($tab_traj as $key){
                $key->afficher();
                echo"<br>";
        }
        ?>
    </body>
</html>