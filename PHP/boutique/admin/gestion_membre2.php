<?php require_once('../inc/header.inc.php');?>

<?php
if(!adminConnect()){ // Restraindre cette page lorsque l'on est pas admin

    header('location:../index.php');
    exit();

}
//-----------------------------------------------------//
// Suppression des membres :

if(isset($_GET['action']) && $_GET['action'] == 'suppression'){ // si il y a une 'action' dans l'URL et que c'est égale à 'suppression'

    execute_requete("DELETE FROM membre WHERE id_membre='$_GET[id_membre]'");

 //   header('location:gestion_membre2.php');

}

//-----------------------------------------------------//





//-----------------------------------------------------//
// Affichage des membre : 

$r = execute_requete("SELECT * FROM membre");
// debug($r);

$content .= '<h2>Affichage des '.$r->rowCount().'membres :</h2>';

$content .= '<table border ="1" cellpadding="5">';

    $content .= '<tr>';

            for($i=0; $i < $r->columnCount();$i++){

                $colonne = $r->getColumnMeta($i);

                // debug($colonne);

                if($colonne['name']!= 'mdp'){ // si $colonne['name'] n'est pas égale à 'mdp', on affiche le reste des champs des colonnes

                    $content .= "<th>$colonne[name]</th>";
                }
                
            }
         $content .= '<th colspan="2">Action</th>';   

    $content .='</tr>';

    while ($membre = $r->fetch(PDO::FETCH_ASSOC)) { // tant qu'il y a des 'membres'
    // fetch() : permet d'exploiter les données

    // debug($membre);

    $content .= '<tr>';
        foreach ($membre as $indice => $value) {

            if($indice != 'mdp'){

                $content .= "<td>$value</td>";
            }

        }
        $content .= '<td><a href="?action=modification&id_membre='.$membre['id_membre'].'">modif</a></td>';
        $content .= '<td><a href="?action=suppression&id_membre='.$membre['id_membre'].'" Onclick="return(confirm(\'En êtes vous sur ?\'))">suppr</a></td>';
        

    $content .='</tr>';

    }

$content .='</table>';

//-----------------------------------------------------//
// Modification : récupérer les infos pour ensuite l'afficher dans mon formulaire

if(isset($_GET['action']) && $_GET['action'] == 'modification') {

    $r = execute_requete("SELECT * FROM membre WHERE id_membre='$_GET[id_membre]'");

    $membre =$r->fetch(PDO::FETCH_ASSOC);
    //debug($membre);
}

$pseudo = (isset($membre['pseudo'])) ? $membre['pseudo'] :'';
$nom = (isset($membre['nom'])) ? $membre['nom'] :'';
$prenom = (isset($membre['prenom'])) ? $membre['prenom'] :'';
$email = (isset($membre['email'])) ? $membre['email'] :'';
$sexe = (isset($membre['sexe'])) ? $membre['sexe'] :'';
$ville = (isset($membre['ville'])) ? $membre['ville'] :'';
$cp = (isset($membre['cp'])) ? $membre['cp'] :'';
$adresse = (isset($membre['adresse'])) ? $membre['adresse'] :'';
$roles = (isset($membre['roles'])) ? $membre['roles'] :'';

//-----------------------------------------------------//
if($_POST){// si il y a un post donc validation du formulaire

//debug($_POST);

execute_requete("UPDATE membre SET pseudo='$_POST[pseudo]',nom='$_POST[nom]', prenom='$_POST[prenom]',email='$_POST[email]', sexe='$_POST[sexe]', ville='$_POST[ville]', cp='$_POST[cp]', adresse='$_POST[adresse]', roles='$_POST[roles]' WHERE id_membre='$_GET[id_membre]'");

 header('location:gestion_membre2.php');
}

//-----------------------------------------------------//
?>




<?=$content?>

<?php if(isset($_GET['action']) && $_GET['action'] == 'modification') : ?><br>

<form method="post">

    <label for="pseudo">Pseudo</label><br>
    <input type="text" name="pseudo" id="pseudo" class="form-control" value="<?=$pseudo?>"><br><br>

     <label for="prenom">Prenom</label><br>
    <input type="text" name="prenom" id="prenom" class="form-control" value="<?=$prenom?>"><br><br>

    <label for="nom">Nom</label><br>
    <input type="text" name="nom" id="nom" class="form-control" value="<?=$nom?>"><br><br>

    <label for="email">Email</label><br>
    <input type="text" name="email" id="email" class="form-control" value="<?=$email?>"><br><br>

    <label for="sexe">Civilité</label><br>
    <input type="radio" <?php if($sexe == 'm') echo 'checked'?> name="sexe" id="sexe" value="m">Homme<br>
    <input type="radio" <?php if($sexe == 'f') echo 'checked'?> name="sexe" id="sexe" value="f">Femme<br><br>

    <label for="ville">Ville</label><br>
    <input type="text" name="ville" id="ville" class="form-control" value="<?=$ville?>"><br><br>

    <label for="cp">Code Postal</label><br>
    <input type="text" name="cp" id="cp" class="form-control" value="<?=$cp?>"><br><br>

    <label for="adresse">Adresse</label><br>
    <textarea name="adresse" id="adresse" class="form-control" cols="30" rows="8"  ><?=$adresse?></textarea><br><br>

     <label for="roles">Roles</label><br>
     <select name="roles" id="roles" class="form-control">
        <option value="0" <?php if($roles == 0) echo 'selected'?> >Membre</option>
        <option value="1" <?php if($roles == 1) echo 'selected'?> >admin</option>
     </select><br><br>

    <input type="submit" class="btn btn-secondary" value="s'inscrire">

</form>

<?php endif ?>
<?php require_once('../inc/footer.inc.php');?>