<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="view/css/style.css">
</head>
<body>
	<form method="POST" action="">
        <label for="conducteur" class="formu">Conducteur</label><br>
        <select name="conducteur" id="conducteur">
            <option value="" selected>Choisir le conducteur</option>
            <option value="<?= $assoc->id_conducteur ?>"></option>
        </select><br>

        <label for="vehicule" class="formu">Vehicule</label><br>
        <select name="vehicule" id="vehicule">
            <option value="" selected>Choisir le vehicule </option>
            <option value="<?= $assoc->id_vehicule ?>"></option>
        </select><br>

        <input type="submit" value="Ajouter cette Association">
    </form>
</body>
</html>