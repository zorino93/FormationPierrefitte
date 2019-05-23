<?php require_once('init.inc.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon site boutique</title>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/text.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?= URL ?>index.php">LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= URL ?>index.php">Accueil</a>
      </li>

<?php if(adminConnect()) : ?>

<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          BackOffice
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= URL ?>admin/gestion_boutique.php">Gestion boutique</a>
          <a class="dropdown-item" href="<?= URL ?>admin/gestion_membre2.php">Gestion membre</a>
          <a class="dropdown-item" href="<?= URL ?>admin/gestion_commande.php">Gestion commande</a>
        </div>
      </li>

<?php endif; ?>

      <li class="nav-item">
        <a class="nav-link" href="<?=URL?>panier.php">Panier</a>
      </li>

<?php  if(userConnect() ) : ?>      

      <li class="nav-item">
        <a class="nav-link" href="<?= URL ?>profil.php">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= URL ?>connexion.php?action=deconnexion">Deconnexion</a>
      </li>

<?php else : ?>

        <li class="nav-item">
        <a class="nav-link" href="inscription.php">Inscription</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="connexion.php">Connexion</a>
      </li>
      
<?php endif; ?>
      
    </ul>
    </div>
</nav>


<div class="container">