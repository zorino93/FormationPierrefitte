<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VTC</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
    <div>
    <nav class="navbar navbar-expand-sm bg-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Conducteur</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index2.php">Vehicule</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index3.php">Link 3</a>
    </li>
  </ul><br>

</nav>
    </div>
    <table class="conducteurs">
        <thead>
            <tr>
                <th>id_vehicule</th>
                <th>marque</th>
                <th>model</th>
                <th>couleur</th>
                <th>immatricule</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vehicules as $vehicule) : ?>
            <tr>
                <td><?php echo htmlentities($vehicule->id_vehicule);?></td>

                <td>
                    <a href="index2.php?op=show&id=<?php echo $vehicule->id_vehicule; ?>">
                        <?php echo htmlentities($vehicule->marque);?>
                    </a>
                </td>
                <td><?php echo htmlentities($vehicule->couleur);?></td>
                
                <td><?php echo htmlentities($vehicule->couleur);?></td>

                <td><?php echo htmlentities($vehicule->immatricule);?></td>


                <td>
                    <a href="index2.php?op=update&id=<?php echo $vehicule->id_vehicule; ?>">
                        modification
                    </a>
                </td>
                <td>
                    <a href="index2.php?op=delete&id=<?php echo $vehicule->id_vehicule; ?>">
                        suppression
                    </a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table><br><br>
    <form action="" method="post">

        <label for="marque">marque :</label><br>
        <input type="text" name="marque" id="marque"><br><br>
        
        <label for="model">model :</label><br>
        <input type="text" name="model" id="model"><br><br>

         <label for="couleur">couleur :</label><br>
        <input type="text" name="couleur" id="couleur"><br><br>

         <label for="immatricule">immatricule :</label><br>
        <input type="text" name="immatricule" id="immatricule"><br><br>

        <input type="submit" value="Ajouter">

    </form>
</body>
</html>
