<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Lire voiture </title>
    </head>
   
    <body>
    	<?php
			require_once 'Model.php';
			require_once '/home/ann2/paysj/public_html/TD-PHP/TD1/Voiture.php';
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
			?>
	</body>
</html>
