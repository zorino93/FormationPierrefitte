<?php

// En AJAX, nous avons besoin d'un langage côté serveur pour communiquer avec le client.

print_r($_GET);

$retour = array();

if(isset($_GET['ville']) && $_GET['ville'] == 'Paris'){

    $retour['meteo'] = "Ajourd'hui il fait beau";
    $retour['temperature'] = '20°C'; // on peut ajouter plusieurs indice dans notre array qui correspond à plusieurs propriétés dans l'objet JSON retourné vers le client.

    echo json_encode($retour);

}