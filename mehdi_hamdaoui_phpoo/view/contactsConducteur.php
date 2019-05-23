<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Conducteur</title>
		<link rel="stylesheet" type="text/css" href="view/css/style.css">
	</head>
	<body>
		<table class="contacts">
			<thead>
				<tr>
					<th>Prenom</th>
					<th>Nom</th>
					<th colspan="2">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($contacts as $contact) :  ?>
					<tr>
						<td>
							<a href="conducteur.php?op=show&id=<?php echo $contact->id_conducteur; ?>">
								<?php echo htmlentities($contact->prenom);  ?>
							</a>
						</td>
						<td><?php echo htmlentities($contact->nom);  ?></td>
						
						<td>
							<a href="conducteur.php?op=delete&id=<?php echo $contact->id_conducteur; ?>">
								delete
							</a>

						</td>
						<td>
							<a href="conducteur.php?op=update&id=<?php echo $contact->id_conducteur; ?>">
								update
							</a>

						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		<form method="POST" action="">
		<label for="prenom">Prenom :</label><br>
		<input type="text" name="prenom" id="prenom" value="<?= $prenom ?>"><br>

		<label for="nom">Nom :</label><br>
		<input type="text" name="nom" id="nom" value="<?= $nom ?>"><br>
		
		<input type="submit" value="Ajouter">
	</form>
	</body>
</html>


