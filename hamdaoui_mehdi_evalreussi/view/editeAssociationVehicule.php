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
        <label for="id_association">id_association :</label><br>
        <input type="text" name="id_association" id="id_association" value="<?= $association->id_association ?>"><br><br>
        
        <label for= "id_vehicule">id_vehicule :</label><br>
        <input type="text" name="id_vehicule" id="id_vehicule" value="<?= $association->vehicule ?>"><br><br>

        <label for= "id_conducteur">id_conducteur :</label><br>
        <input type="text" name="id_conducteur" id="id_conducteur" value="<?= $association->conducteur ?>"><br><br>

        <input type="submit" value="valider">

    </form>
</body>
</html>