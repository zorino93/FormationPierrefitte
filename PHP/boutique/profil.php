<?php require_once('inc/header.inc.php');?>

<?php

if (!userConnect()) {// si l'internaute n'est pas connecté
    // redirection vers connexion.php
    header('location:connexion.php');
    exit(); // exit() termine le script courant
}

if (adminConnect()) { // si vous êtes connecté et que vous êtes administrateur

    $content .= '<h2 style="color:red;">ADMINISTRATEUR</h2>';
}

?>


<?php
debug($_SESSION);

$content .= '<h1>Bonjour'.' '.$_SESSION['membre']['prenom'].'</h1>';
$content .= '<p>Voici vos informations :</p>';
$content .= '<p>Votre pseudo :'.' '.$_SESSION['membre']['username'].'</p>';
$content .= '<p>Votre prenom :'.' '.$_SESSION['membre']['prenom'].'</p>';
$content .= '<p>Votre nom :'.' '.$_SESSION['membre']['nom'].'</p>';
$content .= '<p>Votre email :'.' '.$_SESSION['membre']['email'].'</p>';
$content .= '<p>Votre adresse :'.' '.$_SESSION['membre']['adresse'].' '.$_SESSION['membre']['codePostal'].' '.$_SESSION['membre']['ville'].''.'</p>';



?>

<?=$content?>

<?php require_once('inc/footer.inc.php');?>