<?php require_once('inc/header.inc.php');?>


<?php

if(userConnect()){ // si l'internaute est connecté

    header('location:profil.php');
    exit();
}


?>

<?php

if($_POST){ // Si on clique sur le bouton 'submit'

    debug( $_POST );

    //Déclaration d'un variable :
    $erreur = '';

    if(strlen($_POST['username'])<=3 || strlen($_POST['username'])>=20){//Si le username est inférieur ou égal à 3 OU qu'il est supérieur ou égal à 20

        $erreur .= '<div class="alert alert-danger" role="alert">Erreur taille username</div>';

    }

    // Test si le username est disponible, si le username renvoie au moins 1 résultat, c'est que le username est déjà attribué

    $r = execute_requete("SELECT * FROM membre WHERE username = '$_POST[username]'");

    if($r->rowCount() >=1){

        $erreur .= '<div class="alert alert-danger" role="alert">username indisponible</div>';
    }


    // Boucle sur les saisies afin de les passer dans la fonction addslaches()
    foreach ($_POST as $key => $value) {
        $_POST[$key] = addslashes($value);
    }

    // Cryptage du mot de passe :
    $_POST['password'] = password_hash($_POST['password'],PASSWORD_DEFAULT);

    if( empty($erreur)){ // si ma variable $erreur est vide

        execute_requete("INSERT INTO membre(username, password, prenom, nom, email, civilite, ville, codePostal, adresse) VALUES('$_POST[username]','$_POST[password]', '$_POST[prenom]', '$_POST[nom]', '$_POST[email]', '$_POST[civilite]', '$_POST[ville]', '$_POST[codePostal]', '$_POST[adresse]')");

        echo '<div class="alert alert-success role="alert">Inscription validée !<a href="'.URL.'connexion.php">Cliquez ici pour vous connecter</a></div>';
}
// Affichage des erreurs :
$content .=$erreur;



}

//----------------------------------------------------------------------------//
?>

<h1>INSCRIPTION</h1>

<?=$content?>

<form method="post">

    <label for="username">Pseudo</label><br>
    <input type="text" name="username" id="username" class="form-control"><br><br>

    <label for="password">Mot de passe</label><br>
    <input type="text" name="password" id="password" class="form-control"><br><br>

     <label for="prenom">Prenom</label><br>
    <input type="text" name="prenom" id="prenom" class="form-control"><br><br>

    <label for="nom">Nom</label><br>
    <input type="text" name="nom" id="nom" class="form-control"><br><br>

    <label for="email">Email</label><br>
    <input type="text" name="email" id="email" class="form-control"><br><br>

    <label for="civilite">Civilité</label><br>
    <input type="radio" name="civilite" id="civilite" value="m">Homme<br>
    <input type="radio" name="civilite" id="civilite" value="f">Femme<br><br>

    <label for="ville">Ville</label><br>
    <input type="text" name="ville" id="ville" class="form-control"><br><br>

    <label for="codePostal">Code Postal</label><br>
    <input type="text" name="codePostal" id="codePostal" class="form-control"><br><br>

    <label for="adresse">Adresse</label><br>
    <textarea name="adresse" id="adresse" class="form-control" cols="30" rows="8"></textarea><br><br>

    <input type="submit" class="btn btn-secondary" value="s'inscrire">
</form>


<?php require_once('inc/footer.inc.php');?>