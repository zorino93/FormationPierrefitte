<?php 

/*
EXERCICE : 
1 - Faire un formulaire où vous allez renseigner : la ville, le code_postal et l'adresse

2 - Affichez votre adresse du type : 
	
	"J'habite au 107 rue Jules chatenay à PierreFit dans le 93"

	2.1 - Gérer les erreurs quand j'arrive sur la page

3 - Affichez les saisies renseignées via une boucle :
*/

if($_POST){ // si il y a un post, c'est à dire on a cliqué sur le bouton 'submit'

echo "Ville:" . $_POST['ville'] . '<br>';
echo "Adresse :". $_POST['adresse'] . '<br>';
echo "Code postal :". $_POST['code_postal']  . '<br>';

echo "J'habite au" . " " . $_POST['adresse'] . " " . "à". " " . $_POST['ville'] . " dans le"." ". $_POST['code_postal']  . '<br>';

}

// foreach ($_POST as $key => $value) { // parcours les indices et  les valeurs du tableau ($_POST)
//    echo $key . '=>' . $value . '<br>'; 
// }

foreach ($_POST as $info) { // parcours les valeurs du tableau ($_POST)
    
    echo $info . '<br>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire 2</title>
</head>
<body>

<form method="post" action="">
    <div>
        <label for="ville">Ville:</label>
        <input type="text" id="ville" name="ville">
    </div>

    <div>
        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse">
    </div>

    <div>
        <label for="code_postal">Code postal :</label>
        <input type="text" id="code_postal" name="code_postal">
    </div>
    
    <input type="submit">
</form>
    
</body>
</html>