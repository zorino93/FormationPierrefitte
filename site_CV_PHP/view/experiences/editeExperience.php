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
    <?php
        //  $accents = array(' ','_','-','À','Á','Â','Ã','Ä','Å','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ò','Ó','Ô','Õ','Ö','Ù','Ú','Û','Ü','Ý','à','á','â','ã','ä','å','ç','è','é','ê','ë','ì','í','î','ï','ð','ò','ó','ô','õ','ö','ù','ú','û','ü','ý','ÿ');
//  $sans = array('','','','A','p','A','A','A','A','C','E','E','E','E','I','I','I','I','O','O','O','O','O','U','U','U','U','Y','a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','o','o','o','o','o','o','u','u','u','u','y','y');

    // echo str_replace($accents, $sans, $nomEntreprise);
    ?>

    <form action="" method="post">
        <label for="nomEntreprise">Entreprise :</label>
        <input type="text" name="nomEntreprise" id="nomEntreprise" value="<?= $contact->nomEntreprise ?>"><br><br>
        
        <label for= "date">Date :</label>
        <input type="text" name="date" id="date" value="<?= $contact->date ?>"><br><br>

        <label for="poste">Poste :</label>
        <input type="text" name="poste" id="poste" value="<?= $contact->poste ?>"><br><br>

        <label for="ville">Ville :</label>
        <input type="text" name="ville" id="ville" value="<?= $contact->ville ?>"><br><br>

        <input type="submit" value="Edite">

    </form>
</body>
</html>