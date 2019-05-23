
<?php
$mail = isset($_POST['mail']) ? $_POST['mail'] : '';
$mdp = isset($_POST['mdp']) ? $_POST['mdp'] : '';
?>

<p>Bonjour, Votre nom de domaine est <?php echo $mail;?></p>

<p>La longueur de votre pass est de <?php echo strlen($mdp) ; ?></p>

