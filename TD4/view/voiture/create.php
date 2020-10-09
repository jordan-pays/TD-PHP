<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Liste des Voitures :</title>
    </head>

    <body>
        <form method="post" action='routeur.php?action=created'>
            <fieldset>
                <legend>Mon formulaire :</legend>
                <p>
                    <label for="immat_id">Immatriculation</label> :
                    <input type="text" placeholder="Ex : 256AB34" name="immatriculation" id="immat_id" required/>
                </p>
                <p>
                    <label for="coul_id">Couleur</label> :
                    <input type="text" placeholder="Ex : Bleu" name="couleur" id="coul_id" required/>
                </p>
                <p>
                    <label for="marque_id">Marque</label> :
                    <input type="text" placeholder="Ex : Audi" name="marque" id="marque_id" required/>
                </p>
                <p>
                    <input type="submit" value="Envoyer" />
                </p>
            </fieldset>
        </form>
    </body>
</html>