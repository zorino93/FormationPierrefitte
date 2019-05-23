<?php

$retour = array();

if (isset($_GET['id']) && $_GET['id'] == 105) {
    
    $retour['texte'] = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, expedita aliquam culpa, accusantium nihil maiores numquam libero distinctio adipisci soluta, nulla quia sapiente animi cum blanditiis quos impedit minus optio?";

    echo json_encode($retour);
}