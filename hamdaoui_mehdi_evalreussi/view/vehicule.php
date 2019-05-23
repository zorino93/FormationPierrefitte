<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $vehicule->marque;?></title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
    
    <h1><?php echo $vehicule->marque;?></h1>

    <div>
        <span>marque :</span>
        <?php echo $vehicule->marque;?>
    </div>
    <div>
        <span>model :</span>
        <?php echo $vehicule->model;?>
    </div>
    <div>
        <span>couleur :</span>
        <?php echo $vehicule->couleur;?>
    </div>
    <div>
        <span>immatricule :</span>
        <?php echo $vehicule->immatricule;?>
    </div>
</body>
</html>