<?php 

print '<pre>';
    print_r($_POST);
print '</pre>';

// $_POST['name'] où le 'name' correspnd à l'attribut de l'input !
if($_POST){ // si il y a un post, c'est à dire on a cliqué sur le bouton 'submit'

echo "Prenom :" . $_POST['prenom'] . '<br>';
echo "Description :" . $_POST['desc'] . '<br>';

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire 1</title>
</head>
<body>
    <h1>Formulaire 1</h1>

    <form method="post" action="">
    <!-- method :comment vont circuler les donner (get ou post)
        action : url de destination (page que j'aurais créer pour destination)
    -->

    <label for="prenom">Prenom</label><br>
    <input type="text" id="prenom" name="prenom"><br><br>

    <!-- ne surtout pas oublier l'attribut 'name' dans les inputs d'un formulaire !!!!!
    => c'est ce qui permet de récupérer les valeurs via la superglobale : $_POST -->

    <label for="desc">Description</label><br>
   <textarea name="desc" id="desc" cols="30" rows="10"></textarea><br>

   <input type="submit">
    </form>
</body>
</html>