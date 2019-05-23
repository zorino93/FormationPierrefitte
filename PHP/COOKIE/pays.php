<?php

print '<pre>';
    print_r($_COOKIE);
print '</pre>';

//------------------------------------------------------------//
if( isset($_GET['pays'] ) ){ // si il existe un pays dans l'url c'est que nous avons cliqué sur un lien 

    $pays = $_GET['pays']; // Ici, je déclare une variable $pays et lui affecte la valeur correspondante au lien cliqué (donc dans l'url : 'fr', 'it', 'es' ou 'en' )

    // echo $pays;
}
else if( isset($_COOKIE['pays']) ){ // Est-ce qu'il existe un cookie 'pays'

    $pays = $_COOKIE['pays']; // Ici, on récupère l'information dans le cookie et le transmet à la variable $pays

}
else{ // cas par defaut

    $pays = 'fr';
}

//------------------------------------------------------------//
var_dump( time() );
//time() représente le nombre de seconde écoulées depuis le 1er janvier 1970

$un_an = 365 * 24 * 60 * 60; // durée en seconde pour une année 
// 365jrs * 24h * 60min * 60s

setCookie( 'pays', $pays, time()+$un_an ); // Ici, ce cookie sera crée dans tous les cas puisque le code n'est pas dans une condition

// setcookie ( 'nomDuCookie', 'valeurDuCookie', 'dureeDeVieDuCookie' );

//------------------------------------------------------------//

switch($pays){ // Ici, on compare la valeur de $pays ry rn fonction de sa valeur, on affiche une phrase correspondante à la langue choisie

    case 'fr':
        echo "<p>Bonjour la France</p>";
    break;
    case 'it':
        echo "<p>Ciao Italia</p>";
    break;
    case 'es':
        echo "<p>Hola Espana</p>";
    break;
    case 'en':
        echo "<p>Hello England</p>";
    break;
}
//------------------------------------------------------------//





?>
<h1>Choix de la langue </h1>
<!-- 4 liens pointant la même pas dans une liste où l'on passe une info dans l'url-->
<ul>
    <li><a href="?pays=fr">France</a></li>
    <li><a href="?pays=es">Espagne</a></li>
    <li><a href="?pays=it">Italie</a></li>
    <li><a href="?pays=en">Angleterre</a></li>
</ul>