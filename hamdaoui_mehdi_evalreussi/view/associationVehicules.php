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
      <a class="nav-link" href="index3.php">Association</a>
    </li>
  </ul><br>

</nav>
    </div>
    <table class="conducteurs">
        <thead>
            <tr>
                <th>id_association</th>
                <th>id_vehicule</th>
                <th>id_conducteur</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($associations as $association) : ?>
            <tr>
                <td><?php echo htmlentities($association->id_association);?></td>

                <td>
                    <a href="index2.php?op=show&id=<?php echo $association->id_association; ?>">
                        <?php echo htmlentities($association->marque);?>
                    </a>
                </td>
                <td><?php echo htmlentities($association->couleur);?></td>


                <td>
                    <a href="index2.php?op=update&id=<?php echo $association->id_association; ?>">
                        modification
                    </a>
                </td>
                <td>
                    <a href="index2.php?op=delete&id=<?php echo $association->id_association; ?>">
                        suppression
                    </a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table><br><br>
    <form action="" method="post">

        <label for="id_association">id_association :</label><br>
        <input type="text" name="id_association" id="id_association"><br><br>
        
        <label for="id_vehicule">id_vehicule :</label><br>
        <input type="text" name="id_vehicule" id="id_vehicule"><br><br>

         <label for="id_conducteur">id_conducteur :</label><br>
        <input type="text" name="id_conducteur" id="id_conducteur"><br><br>

        <input type="submit" value="Ajouter">

    </form>
</body>
</html>
