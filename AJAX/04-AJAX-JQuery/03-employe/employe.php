<?php

$retour=array();

if($_POST){ // si on a reçu des données dans $_POST

    $personne = strtolower($_POST['personne']); // passe tout les caractère en minuscules, pour comparer un prenom en minuscules avec les données du fichier JSON qui sont aussi en minuscules.

    // lire le contenu du fichier appeler fichier.json :
    $fichier = file_get_contents('fichier.json'); // cette fonction lis le fichier et le met dans un string.

    $array = json_decode($fichier, true); // cette fonction decode une chaîne json en un array associatif multidimensionnel (true) ou en un objet (false).

    // echo '<pre>';
    // var_dump($array);
    // echo '</pre>';

    //On parcour $array pour trouver le prenom $personne :
    foreach ($array as $employe) { // $employe est un "sous-array" de $array
        if($employe['prenom'] == $personne){ // si je suis sur le tableau qui contient les données de l'employé demander, j'en extrait les informations :

            $retour['prenom'] = $employe['prenom'];
            $retour['nom'] = $employe['nom'];
            $retour['service'] = $employe['service'];

        }
        
    }

    echo json_encode($retour); // encode en JSON l'array $retour et l'envoie vers le navigateur de l'internaute

}