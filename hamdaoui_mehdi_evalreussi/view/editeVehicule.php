<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo htmlentities($title); ?></title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
    <form action="" method="post">
        <label for="prenom">marque :</label><br>
        <input type="text" name="prenom" id="prenom" value="<?= $vehicule->marque ?>"><br><br>
        
        <label for= "nom">model :</label><br>
        <input type="text" name="nom" id="nom" value="<?= $vehicule->model ?>"><br><br>

        <label for= "nom">couleur :</label><br>
        <input type="text" name="nom" id="nom" value="<?= $vehicule->couleur ?>"><br><br>

        <label for= "nom">immatricule :</label><br>
        <input type="text" name="nom" id="nom" value="<?= $vehicule->couleur ?>"><br><br>

        <input type="submit" value="valider">

    </form>
</body>
</html>