<?php

//-----------------------------------------------------------------//
// fonction debug() : permet d'effectuer un print_r "amélioré" 

function debug($arg){

    echo '<div style = "background : #fda500; padding : 5px; z-index:1000;">';

        $trace = debug_backtrace(); // fonction prédéfinie de php qui retourne un array contenant des infos

        echo 'Debug demandé dans le fichier :'.$trace[0]['file'].'à la ligne'.$trace[0]['line'];

        print '<pre>';
            print_r($arg);
        print'</pre>';

    echo '</div>';
}

//-----------------------------------------------------------------//

// fonction execute_requete() : permet d'effectuer une requête

function execute_requete($req){
    global $pdo;

    $pdostatement = $pdo->query($req);

    return $pdostatement;
}

//-----------------------------------------------------------------//
// fonction userConnect() : si l'internaute est connecté

function userConnect(){

    // si la session n'existe pas, on retourne false
    if(!isset($_SESSION['membre'])){

        return false;
    }
    else{// sinon on retourne true

        return true;
    }
}

//-----------------------------------------------------------------//
// fonction adminConnect() : si l'internaute est connecté ET qu'il est admin

function adminConnect(){

    // si l'internaute est connecté ET qu'il est admin donc qui a un statut égal à 1
    if (userConnect() && $_SESSION['membre']['roles'] == 1) {

        return true;
    }
    else{
         return false;
    }
}


//-----------------------------------------------------------------//

// Fonction creation_panier()

function creation_panier(){

    if (!isset($_SESSION['panier'])) {
        // si la session/panier n'existe pas

            $_SESSION['panier'] = array();
            $_SESSION['panier']['titre'] = array();
            $_SESSION['panier']['id_article']= array();
            $_SESSION['panier']['quantite'] = array();
            $_SESSION['panier']['prix'] = array();
    }
}
 
//-----------------------------------------------------------------//

// Fonction ajout_panier()

function ajout_panier($titre, $id_article, $quantite,$prix){

    creation_panier();
    // si la session/panier n'existe pas
    // si la panier existe et on l'utilise

    // permet de savoir  si l'id_article que l'on souhaite ajouter est déjà présent ou non dans la session/panier en cours

    $position_article = array_search($id_article, $_SESSION['panier']['id_article']); // retourne true ou false

    if($position_article !== false){ // si le produit est déjà présent dans le panier

        $_SESSION['panier']['quantite'][$position_article] += $quantite;
        //On va précisément à l'indice du produit concerné et on y ajoute la nouvelle quantité

    }
    else{ // sion, si l'article n'existe pas dans le panier, on ajoute les informations de l'article sélectionné. Les crochets permettent de passé à l'indice suivant.


        $_SESSION['panier']['titre'][] =$titre;
        $_SESSION['panier']['id_article'][] =$id_article;
        $_SESSION['panier']['quantite'][] =$quantite;
        $_SESSION['panier']['prix'][] =$prix;
    }
}

//-----------------------------------------------------------------//

//fonction montant_total()

function montant_total(){

    $total = 0;

    for($i=0; $i < count($_SESSION['panier']['id_article']) ; $i++) { 
        
        $total += $_SESSION['panier']['quantite'][$i] * $_SESSION['panier']['prix'][$i];
    }
    return round($total,2);
}

//-----------------------------------------------------------------//
// focntion retirer_article_panier():

function retirer_article_panier( $id_article_a_supprimer){

    $position_article = array_search( $id_article_a_supprimer, $_SESSION['panier']['id_article']);

    if($position_article !== false){// Si le produit existe dans le panier

        // array_splice(arg1,arg2,arg3): arg1 représente le tableau dans lequel on va rechercher l'arg2, et l'arg3 c'est le nombre à supprimer.

        array_splice($_SESSION['panier']['titre'], $position_article, 1);
        array_splice($_SESSION['panier']['id_article'], $position_article, 1);
        array_splice($_SESSION['panier']['quantite'], $position_article, 1);
        array_splice($_SESSION['panier']['prix'], $position_article, 1);

    }

    header('location:panier.php');
}

?>