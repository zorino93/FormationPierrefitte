<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Vehicule</title>
		<link rel="stylesheet" type="text/css" href="view/css/style.css">
	</head>
	<body>
		<table class="contacts">
			<thead>
				<tr>
                    <th>id_vehicule</th>
					<th>marque</th>
					<th>modele</th>
					<th>couleur</th>
					<th>immatriculation</th>
					<th colspan="2">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($vehicules as $vehicule) :  ?>
					<tr>
						<td>
							<a href="vehicule.php?veh=show&id=<?php echo $vehicule->id_vehicule; ?>">
								<?php echo htmlentities($vehicule->id_vehicule);  ?>
                            </a>
                        </td>
                        <td><?php echo htmlentities($vehicule->marque);  ?></td>
                        <td><?php echo htmlentities($vehicule->modele);  ?></td>
                        <td><?php echo htmlentities($vehicule->couleur);  ?></td>
                        <td><?php echo htmlentities($vehicule->immatriculation);  ?></td>
						<td>
							<a href="vehicule.php?veh=delete&id=<?php echo $vehicule->id_vehicule; ?>">
								delete
							</a>

						</td>
						<td>
							<a href="vehicule.php?veh=update&id=<?php echo $vehicule->id_vehicule; ?>">
								update
							</a>

						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
        </table>
    
    <form method="POST" action="">
		<label for="marque">marque :</label><br>
		<input type="text" name="marque" id="marque" value="<?= $marque ?>"><br>

		<label for="modele">modele :</label><br>
		<input type="text" name="modele" id="modele" value="<?= $modele ?>"><br>

		<label for="couleur">couleur :</label><br>
		<input type="text" name="couleur" id="couleur" value="<?= $couleur ?>"><br>

		<label for="immatriculation">immatriculation :</label><br>
		<input type="text" name="immatriculation" id="immatriculation" value="<?= $immatriculation ?>"><br>


		<input type="submit" value="Ajouter">
	</form>
	</body>
</html>


