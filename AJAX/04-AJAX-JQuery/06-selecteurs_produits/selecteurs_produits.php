<?php

// connexion à la BDD :
$pdo = new PDO('mysql:host=localhost;dbname=tapis', 'root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND,'SET NAMES utf8'));

$retour = '';
$matiere = true;
$couleur = true;
$forme = true;

// on construit la requête SQL :
// echo '<pre>';
//     print_r($_POST);
// echo '</pre>';

//Matière :
if (isset($_POST['matiere'])) { // si l'array "matiere" existe dans $_POST
    $matiere = "matiere IN ('".implode("','", $_POST['matiere'])."')";

    // echo '<pre>';
    //     print_r($matiere);
    // echo '</pre>';
}

// Couleur :
if (isset($_POST['couleur'])) { // si l'array "couleur" existe dans $_POST
    $couleur = "couleur IN ('".implode("','", $_POST['couleur'])."')";

    // echo '<pre>';
    //     print_r($couleur);
    // echo '</pre>';
}

// forme :
    if (isset($_POST['forme'])) { // si l'array "forme" existe dans $_POST
    $forme = "forme IN ('".implode("','", $_POST['forme'])."')";

    // echo '<pre>';
    //     print_r($forme);
    // echo '</pre>';
}


// On fait une requête pour selectionner les tapis :
$donnees = $pdo->query("SELECT * FROM produit WHERE $matiere AND $couleur AND $forme");

// On prépare le HTML contenant les tapis :
if ($donnees->rowCount() > 0) {
    //  si il y a des tapis dans la requête :
    while ($produit = $donnees->fetch(PDO::FETCH_ASSOC)) {
        
        // echo '<pre>';
        //     print_r($produit);
        // echo '</pre>';

        $retour .= '<div style="width:15%; float:left;">';
            $retour .= '<h2>Tapis'. $produit['id_produit'] .'</h2>';
            $retour .= '<div><img src="'.$produit['photo'].'" class="photo" style="width:100px;" data-id_produit="'.$produit['id_produit'].'"></div>';
            $retour .='<ul>';
                $retour .= '<li>Matière : '.$produit['matiere'].'</li>';
                $retour .= '<li>Couleur : '.$produit['couleur'].'</li>';
                $retour .= '<li>Forme : '.$produit['forme'].'</li>';
            $retour .='</ul>';
        $retour .='</div>';

        // On peut créer des attributs personalisés data-xxx en HTML pour notre besoin nous créons un attribut data-produit qui contient l'id du produit. Il servira à identifier le tapis sur lequel on clique pour afficher sa photo en grand.
    }

}
else {
    // si il n'y a pas de tapis :
    $retour = '<p>Aucun produit ne correspond à votre recherche</p>';
}

echo $retour; // On retourne du HTML vers le navigateur (pas besoin de json_encode).
