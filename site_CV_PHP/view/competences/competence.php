<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>

    <div>
        <span>nom :</span>
        <?php echo $contact->name;?>
    </div>
    <div>
        <span>level :</span>
        <?php echo $contact->capacite;?>
    </div>
    <div>
        <span>photo :</span>
        <?php echo $contact->photo;?>
    </div>
    
</body>
</html>