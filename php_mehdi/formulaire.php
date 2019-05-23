<?php

// connexion à la base de donnée

$pdo = new PDO('mysql:host=localhost;dbname=immobilier','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING,PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));


?>

<!-- Création d'un formulaire -->

<form method="post" enctype="multipart/form-data">

<label for="titre">Titre</label><br>
<input type="text" name="titre" id="titre"><br><br>

<label for="adresse">Adresse</label><br>
<input type="text" name="adresse" id="adresse"><br><br>

<label for="ville">Ville</label><br>
<input type="text" name="ville" id="ville"><br><br>

<label for="cp">Code Postal</label><br>
<input type="text" name="cp" id="cp"><br><br>

<label for="surface">Surface</label><br>
<input type="text" name="surface" id="surface"><br><br>

<label for="prix">Prix</label><br>
<input type="text" name="prix" id="prix"><br><br>

<label for="photo">Photo</label><br>
<input type="file" name="photo" id="photo"><br><br>

<label for="type">Type</label><br>
    <input type="radio" name="type" id="type" value="location">Location<br>
    <input type="radio" name="type" id="type" value="vente">Vente<br><br>

<label for="description">Description</label><br>
<textarea name="description" id="description" cols="30" rows="10" style="resize : none;"></textarea><br><br>

<input type="submit" value="Valider">

</form>

<?php

if($_POST){ // si on clique sur le bouton 'submit'


        // var_dump($_POST);

        // Gestion des erreurs :
        $erreur = '';

        if(strlen($_POST['titre'])<=3 || strlen($_POST['titre'])>=20){

            $erreur .= '<p>Erreur taille titre</p>';
        }

        if(strlen($_POST['adresse'])<=3 || strlen($_POST['adresse'])>=50){

            $erreur .= '<p>Erreur taille Adresse</p>';
        }

        if(strlen($_POST['ville'])<=3 || strlen($_POST['ville'])>=20){

            $erreur .= '<p>Erreur taille Ville</p>';
        }

        if(preg_match("#^([0-9]{5})$#",$_POST['cp'])){

            $erreur .= '<p>Erreur taille code postal</p>';

        }


        if(is_int($_POST['surface'])){

            $erreur .= '<p>Erreur taille Surface</p>';
        }

        if(is_int($_POST['prix'])){

            $erreur .= '<p>Erreur taille Prix</p>';
        }

        if(strlen($_POST['description'])<=3 || strlen($_POST['description'])>=255){

            $erreur .= '<p>Erreur taille description</p>';
        }


        // On fait une une insertion si les champs ne sont pas vide

        if(!empty($_POST['titre']) && !empty($_POST['adresse']) && !empty($_POST['ville']) && !empty($_POST['cp']) && !empty($_POST['surface']) && !empty($_POST['prix']) && !empty($_POST['type'])){

                // faire la requête d'insertion
                $resultat = $pdo->exec("INSERT INTO logement(titre, adresse, ville, cp, surface, prix, type, description, photo) VALUES('$_POST[titre]','$_POST[adresse]','$_POST[ville]','$_POST[cp]','$_POST[surface]','$_POST[prix]','$_POST[type]', '$_POST[description]', 'NULL')");

                var_dump($resultat);


                if(isset($resultat)){


                    $id = $pdo->lastinsertId();
            //  var_dump($_FILES);

                $taillelimite = 3145728; // taille de fichier upload 3Mo
                $content = '';

                if(!empty($_FILES['photo']['name'])){ // si on a uploader un fichier

                    if($_FILES['photo']['size']>$taillelimite){ // récupérer la taille du fichier ne dépassant pas 3Mo
                        $content .='Fichier trop lourd.</br>';
                    }


                    $photo = explode('.', $_FILES['photo']['name']);
                    $text = end($photo); // verification de l'extension

                    // renommer la photo
                    $photo = 'logement_'.$id.'.'.$text;

                    // le chemin pour accéder à la photo en BDD
                    $photo_bdd = "http://localhost/FormationPierrefitte/";

                    // l'endroit ou stocker la photo
                    $photo_dossier = $_SERVER['DOCUMENT_ROOT']."/FormationPierrefitte/php_mehdi/photo/$photo";

                    copy($_FILES['photo']['tmp_name'],$photo_dossier);

                    $resultat = $pdo->query("UPDATE logement SET photo = '$photo_bdd' WHERE id_logement = $id");

                    }

                }
                else{

                    echo '<p style="color:red;">Veuillez remplir tout les champs</p>';
                }


    }

}


?>

<?=$content?>

<?php

$resultat = $pdo->query("SELECT * FROM logement"); // Requête SELECT pour récupérer  les infos issu de la bdd

?>

<table border="1">

    <tr>
        <?php
        
        for ($i=0; $i < $resultat->columnCount(); $i++) { 
            
            $colonne = $resultat->getColumnMeta($i);

            echo "<th>$colonne[name]</th>";
        }
        
        
        ?>
    </tr>

    <?php
    while($logement = $resultat->fetch(PDO::FETCH_ASSOC)){
        // ici, la methode fetch() permet d'exploiter les donées
        ?>

        <tr>
        <?php
        
        foreach ($logement as $key => $value) {
            
            if($key == 'photo'){

                echo "<td><img src='".$value."' width='80'></td>";
            }
            else{
                echo "<td>$value</td>";
            }
        }
        
        
        
        ?>
        
        
        </tr>


    <?php  
    }
    ?>

</table>