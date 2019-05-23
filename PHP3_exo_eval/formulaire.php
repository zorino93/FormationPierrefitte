<?php
//Création d'une base de données 'wf3' avec une table 'apprenant' comprenant 4 champs(id_apprenant, prenom, nom, age et avatar)

//Connexion à la BDD

$pdo = new PDO('mysql:host=localhost;dbname=wf3','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING,PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));

var_dump($pdo);

$content = '';
//Insertion en base lors de la validation du formulaire (method = 'post')

//Affichage des informations de la bdd

?>

<!-- //Formulaire d'inscription avec les inputs pouvant renseigner les champs de notre table -->

<form action="" method="post" enctype="multipart/form-data">

<label for="nom">Nom</label><br>
<input type="text"  name="nom" id="nom"><br><br>

<label for="prenom">Prenom</label><br>
<input type="text"  name="prenom" id="prenom"><br><br>

<label for="age">Age</label><br>
<input type="text"  name="age" id="age"><br><br>

<label for="avatar">Avatar</label><br>
<input type="file"  name="avatar" id="avatar"><br><br>

<input type="submit" value="Télécharger">
</form>

<!-- =>gestion des erreurs : verification du nombre de caractère, l'age doit etre un INTEGER... -->

<?php

if($_POST){ // si on clique sur le bouton 'submit'

    var_dump($_POST);

    $erreur = '';

    if(strlen($_POST['nom'])<=3 || strlen($_POST['nom'])>=20){

        $erreur .= '<p>Erreur taille Nom</p>';
    }

    if(strlen($_POST['prenom'])<=3 || strlen($_POST['prenom'])>=20){

        $erreur .= '<p>Erreur taille prenom</p>';
    }


   $pdo->exec("INSERT INTO apprenant(nom, prenom, age, avatar) VALUES('$_POST[nom]','$_POST[prenom]','$_POST[age]','$_POST[avatar]')");


}

//Afficher les apprenants

$r = $pdo->query("SELECT * FROM apprenant");

 $content .= '<h2>Liste les apprenants</h2>';
 
    $content .= '<table border="1" cellpadding="5">';
        $content .='<tr>';

        for( $i=0 ; $i<$r->columnCount(); $i++){
            
            $colonne = $r->getColumnMeta($i);

            $content .="<th>$colonne[name]</th>";
        }

        $content .=' </tr>';


        // Parcourir ma base de donnée grâce à la boucle while
        while($ligne = $r->fetch(PDO::FETCH_ASSOC)){

            $content .=' <tr>';

                foreach ($ligne as $key => $value) {


                    if($key == 'photo'){
                        $content .= '<td><img src="'.$value.'" width="80"></td>';
                    }
                    else{
                        $content .= "<td>$value</td>";
                    }
                    
                }


            $content .=' </tr>';
        }



    $content .= '</table>';

    echo $content;
?>


