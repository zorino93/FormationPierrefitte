<?php

$retour = array();

// var_dump($_POST);

if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message'])) {



     if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        $retour['message'] = '<p style="color: green;" >Merci pour votre message '. $_POST['email'].'</p>';
        $retour['statut'] = true;

    }else{
        $retour['message'] = '<p style="color: red;">Veuillez vérifier vos saisie</p>';
        $retour['statut'] = false;
    }

}else{
    // si le champ email est vide :
    $retour['message'] = '<span style="color: red;">Veuillez remplir tout les champs !</span>';
    $retour['statut'] = false;
}

echo json_encode($retour);
