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
                <th>id_conducteur</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($conducteurs as $conducteur) : ?>
            <tr>
                <td><?php echo htmlentities($conducteur->id_conducteur);?></td>

                <td>
                    <a href="index.php?op=show&id=<?php echo $conducteur->id_conducteur; ?>">
                        <?php echo htmlentities($conducteur->prenom);?>
                    </a>
                </td>
                <td><?php echo htmlentities($conducteur->nom);?></td>

                <td>
                    <a href="index.php?op=update&id=<?php echo $conducteur->id_conducteur; ?>">
                        modification
                    </a>
                </td>
                <td>
                    <a href="index.php?op=delete&id=<?php echo $conducteur->id_conducteur; ?>">
                        suppression
                    </a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table><br><br>
    <form action="" method="post">

        <label for="prenom">Prenom :</label><br>
        <input type="text" name="prenom" id="prenom"><br><br>
        
        <label for="nom">Nom :</label><br>
        <input type="text" name="nom" id="nom"><br><br>

        <input type="submit" value="Ajouter">

    </form>
</body>
</html>
