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
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" id="prenom"><br><br>
        
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom"><br><br>

        <label for="sexe">Sexe :</label>
        <input type="text" name="sexe" id="sexe"><br><br>

        <label for="service">Service :</label>
        <input type="text" name="service" id="service"><br><br>

        <label for="date_embauche">Date d'embauche :</label>
        <input type="text" name="date_embauche" id="date_embauche"><br><br>

        <label for="salaire">Salaire :</label>
        <input type="text" name="salaire" id="salaire"><br><br>

        <input type="submit" value="Ajouter">

    </form>
</body>
</html>