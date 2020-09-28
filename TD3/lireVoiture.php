<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Lire voiture </title>
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
            /*$v1 = new Voiture("audi","jaune","SHD5420");
            $v1->save();
			$tab_voit = Voiture::getAllVoitures();
			$tab_util = Voiture::getAllUtilisateurs();
			$tab_traj = Voiture::getAllTrajet();
			foreach ($tab_voit as $key) {
				echo $key->afficher();
			}
			/*var_dump ($tab_obj);
			foreach ($tab_obj as $key1) {
				foreach ($key1 as $key => $value) {
					echo "<br> $key est $value";
				}
			}*/
            /*$tab_immat = Voiture::getVoitureByImmat('HDT644TE');
            var_dump($tab_immat);*/
			?>
	</body>
</html>
