<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> testModel </title>
    </head>
   
    <body>
    	<?php
			require_once 'Model.php';
			$rep = Model::$pdo->query('Select * from voiture');
			$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);
			var_dump ($tab_obj);
			foreach ($tab_obj as $key1) {
				foreach ($key1 as $key => $value) {
					echo "<br> $key est $value";
				}
			}
			?>
	</body>
</html>
