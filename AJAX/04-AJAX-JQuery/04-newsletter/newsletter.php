<?php

$retour = ''; // dans ce script on retourne un string qui contient du html

// connexion à la BDD :
$pdo = new PDO('mysql:host=localhost;dbname=newsletter', 'root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND,'SET NAMES utf8'));

if(!empty($_POST['inscription'])){
    // si le champ email n'est pas vide :
    $_POST['inscription'] = htmlspecialchars($_POST['inscription']); // permet de convertir les caractère spéciaux (>,<, &,'',"") en entités HTML(&gt; &lt; &amp; &quote;) ce qui évite les injections de type XSS (code javascript malveillant) ou CSS.

    $req = $pdo->prepare("SELECT * FROM abonne WHERE email = :email"); // on prepare la requête avec le marqueur :email vide dans un premier temps
    $req->bindParam(':email', $_POST['inscription']); // on associe le marqueur :email à la valeur correspondant à l'email saisie par l'internaute
    $req->execute(); // on execute enfin la requête (permet de se préunir des injections SQL)


    if (filter_var($_POST['inscription'], FILTER_VALIDATE_EMAIL)) {
            echo "L'adresse email ". $_POST['inscription']. " est considérée comme valide.";

            if($req->rowCount() > 0 ){
                // si il y a 1 ou plusieurs lignes de résultats, c'est que l'internaute est déjà inscrit :
                $retour = '<span style="color: red;">Vous êtes déjà inscrit à la newsletter</span>';
            }

            else{
                // L'internaute n'est pas encore inscrit :
                $r= $pdo->prepare("INSERT INTO abonne (email) VALUES(:email)");
                $r->bindParam(':email', $_POST['inscription']);
                $r->execute();

                $retour = '<span style="color: green;">Vous êtes inscrit à la newsletter.</span>';
            }

    }
    
    else{
        echo "L'adresse email ". $_POST['inscription']. " est considérée comme invalide.";
        
    }


}

else{
    // si le champ email est vide :
    $retour = '<span style="color: red;">Veuillez remplir votre email !</span>';
}

echo $retour; // pas de json_encode() ici car on envoie un string contenant du HTML directement, et non pas un objet JSON.