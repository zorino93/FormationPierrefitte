<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $assoc->id_association; ?></title>
	<link rel="stylesheet" type="text/css" href="view/css/style.css">
</head>
<body>
	<h1><?php echo $assoc->association; ?></h1>

	<div>
		<span>marque :</span>
		<?php echo $assoc->marque; ?>
	</div>
	<div>
		<span>modele :</span>
		<?php echo $assoc->modele; ?>
    </div>
    <div>
		<span>couleur :</span>
		<?php echo $assoc->couleur; ?>
    </div>
   

<hr><hr>

		<?php foreach($assoc as $indice => $valeur): ?>
			<div><span><?= ucfirst($indice) ?></span> - <span><?= $valeur ?></span></div>
		<?php endforeach; ?>

</body>
</html>