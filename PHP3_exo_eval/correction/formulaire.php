<?php 
//Création d'une base de données 'wf3' avec une table 'apprenant' comprenant 4 champs(id_apprenant, prenom, nom, age et avatar)

//Connexion à la BDD
$pdo = new PDO('mysql:host=localhost;dbname=wf3','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING,PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));

// var_dump($pdo);


//Formulaire d'inscription avec les inputs pouvant renseigner les champs de notre table 
    //=>gestion des erreurs : verification du nombre de caractère, l'age doit etre un INTEGER...
?>

<form action="" method="post" enctype="multipart/form-data">

<!-- method ="post" indispensable pour récupérer les données
    enctype="multipart/form-data" -->

<label for="prenom">Prenom</label><br>
<input type="text"  name="prenom" id="prenom"><br><br>

<label for="nom">Nom</label><br>
<input type="text"  name="nom" id="nom"><br><br>

<label for="age">Age</label><br>
<input type="text"  name="age" id="age"><br><br>

<label for="avatar">Avatar</label><br>
<input type="file"  name="avatar" id="avatar"><br><br>

<input type="submit" value="Télécharger">
</form>


<?php

if($_POST){ // si on clique sur le bouton 'submit'


    // gestion des erreur !!!!! strlen, substr et preg_match(arg1,arg2)

     var_dump($_POST);

    // si les champs ne sont pas vides on fait une insertion

    if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['age'])){

        // requête d'insertion
        $r = $pdo->exec("INSERT INTO apprenant(nom, prenom, age, avatar) VALUES('$_POST[nom]','$_POST[prenom]','$_POST[age]', 'NULL')"); 
        // NULL est une valeur provisoir pour la renommé

        if(isset($r)){

                $id = $pdo->lastinsertId();
     var_dump($_FILES);
           

                if(!empty($_FILES['avatar']['name'])){ // si vous avez uploader un fichier


                    $name_avatar = explode('.' , $_FILES['avatar']['name']);
                    $text = end($name_avatar); // l'extension

                    // renommage de la photo :
                    $nom_avatar = 'apprenant_'.$id.'.'.$text;

                    // chemin pour accéder a la photo en bdd
                    $avatar_bdd = "http://localhost/FormationPierrefitte/PHP3_exo_eval/correction/photo/$nom_avatar";

                    // Où est ce que l'on stock la photo
                    $avatar_dossier = $_SERVER['DOCUMENT_ROOT'] . "/FormationPierrefitte/PHP3_exo_eval/correction/photo/$nom_avatar";

                    copy($_FILES['avatar']['tmp_name'], $avatar_dossier);

                    $r = $pdo->query("UPDATE apprenant SET avatar='$avatar_bdd' WHERE id_apprenant = $id");

                }

            }
            else{

                echo '<p style="color:red;">Veuillez remplir tous les champs</p>';
            }

     }

}

?>


<?php

$r = $pdo->query("SELECT * FROM apprenant"); // Requête SELECT pour récupérer  les infos issu de la bdd

?>

<table border="1">

    <tr>
        <?php
        
        for ($i=0; $i < $r->columnCount(); $i++) { 
            
            $colonne = $r->getColumnMeta($i);

            echo "<th>$colonne[name]</th>";
        }
        
        
        ?>
    </tr>

    <?php
    while($apprenant = $r->fetch(PDO::FETCH_ASSOC)){
        // ici, la methode fetch() permet d'exploiter les donées
        ?>

        <tr>
        <?php
        
        foreach ($apprenant as $key => $value) {
            
            if($key == 'avatar'){

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