<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="view/css/style.css">
</head>
<body>
	<form method="POST" action="">
		<label for="prenom">Prenom :</label><br>
		<input type="text" name="prenom" id="prenom" value="<?= $contact->prenom ?>"><br>

		<label for="nom">Nom :</label><br>
		<input type="text" name="nom" id="nom" value="<?= $contact->nom ?>"><br>

		<input type="submit" value="Ajouter">
	</form>
</body>
</html>