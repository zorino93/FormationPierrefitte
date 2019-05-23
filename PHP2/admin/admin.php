<?php
$email = isset($_POST['email']) ? $_POST['email'] : '';
$mdp = isset($_POST['mdp']) ? $_POST['mdp'] : '';
?>

<h1>Reception</h1>


Bonjour, Votre adresse email est <?php echo $email;?><br />
votre pass est <?php echo $mdp ; ?>

