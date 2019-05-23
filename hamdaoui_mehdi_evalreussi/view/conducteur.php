<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $conducteur->prenom;?></title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
    
    <h1><?php echo $conducteur->prenom;?></h1>

    <div>
        <span>Prenom :</span>
        <?php echo $conducteur->prenom;?>
    </div>
    <div>
        <span>Nom :</span>
        <?php echo $conducteur->nom;?>
    </div>
</body>
</html>