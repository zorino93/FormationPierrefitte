<?php

//Créer une page formulaire.php et réaliser un formulaire permettant de selectionner (select) un fruit et saisir un poids.
//affichez via la fonction calcul le résultat issue des infos du formulaire
//bonus : faites en sorte de garder le dernier fruit sélectionné et le dernier poids saisie dans le formulaire lorsque celui-ci est validé.


include('fonction.inc.php');

if($_POST){

    echo calcul( $_POST['fruit'], $_POST['poids'] );
}

?>
<hr>
<form action="" method="post">

<select id="fruit" name="fruit">

    <option value="cerises">Cerises</option>
    <option value="pommes">Pommes</option>
    <option value="bananes">Bananes</option>
    <option value="peches">Pêches</option>
</select><br><br>

<label for="poids">Poids</label>
<input type="text" name="poids" id="poids"><br><br>

<input type="submit">

 </form>