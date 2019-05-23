<?php

$retour = '';

$pdo = new PDO('mysql:host=localhost;dbname=forum', 'root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND,'SET NAMES utf8'));

if(!empty($_POST['inscription'] && $_POST['pass'])){

    $_POST['inscription'] = htmlspecialchars($_POST['inscription']); 
    $_POST['pass'] = htmlspecialchars($_POST['pass']); 

     $req = $pdo->prepare("SELECT * FROM membre WHERE pseudo = :pseudo AND mdp = :mdp");
     $req->bindParam('pseudo',$_POST['inscription']);
     $req->bindParam('mdp',$_POST['pass']);
     $req->execute();

     if($req->rowCount() == 0 ){
        $retour = '<span style="color: red;">Erreur sur les identifiants</span>';
    }
    else{
        $retour = '<span style="color: green;">Vous êtes connecté.</span>';
    }

}

else{
    $retour = '<span style="color: red;">veuillez remplir vos identifiants</span>';
}

echo $retour;