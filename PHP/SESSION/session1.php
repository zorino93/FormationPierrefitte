<?php

session_start(); // session_start() permet de créer un fichier de session OU de l'ouvrir si il existe déjà ( se situera toujours en premier dans votre code)

var_dump($_SESSION); // supergolbale de php donc c'est un array 

$_SESSION ['pseudo'] = 'marco'; // Ici, on alimente notre fichier de session

$_SESSION ['mdp'] = 'polo';

echo '<br>' . $_SESSION['pseudo']; // Affichage

unset ( $_SESSION ['mdp'] ); // On peut vider une partie de la session

//session_destroy(); // suppression de la session. A savoir, session_destroy() est vu l'interpréteur, gardé, puis exécute A LA FIN de votre script

echo '<br>' ;

// var_dump( $_SESSION );

?>