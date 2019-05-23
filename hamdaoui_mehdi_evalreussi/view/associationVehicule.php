<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $association->id_association;?></title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
    
    <h1><?php echo $association->id_association;?></h1>

    <div>
        <span>id_association :</span>
        <?php echo $association->id_association;?>
    </div>
    <div>
        <span>id_vehicule :</span>
        <?php echo $association->vehicule;?>
    </div>
    <div>
        <span>id_conducteur :</span>
        <?php echo $association->conducteur;?>
    </div>
</html>