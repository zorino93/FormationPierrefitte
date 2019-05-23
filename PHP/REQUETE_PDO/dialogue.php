<?php

    // 1 - Création d'une bdd : 'dialogue'

	// 2 - Création d'une table : 'commentaire' ( pseudo, message, date_enregistrement)

	// 3 - Connexion à la bdd

        $pdo = new PDO('mysql:host=localhost;dbname=dialogue', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));

        var_dump( $pdo );

 ?>

<!-- 4 - Création d'un formulaire (avec les champs correspondants) -->

<form method="post">
    <div>
        <label for="pseudo">Pseudo :</label>
        <input type="text" id="pseudo" name="pseudo">
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea type="text" id="msg" name="msg"></textarea>
    </div>
    
    <input type="submit">
</form>

<?php

    // 5 - Insertion en base des messages postés

    // var_dump($_POST);
    
    // if($_POST){
    // echo '<br>Pseudo posté :'.$_POST ['pseudo'].'<br>';
    // echo 'message posté'.$_POST ['msg'].'<br>';

    // // addslashes(): permet d'accepter les apostrophes 
    // $_POST['msg'] = addslashes($_POST['msg']);

    // // htmlspecialchars(): permet de protéger contre les failles
    // $_POST['msg'] = htmlspecialchars($_POST['msg']);

    // // strip_tags(): permet de supprimer le html
    // $_POST['msg'] = strip_tags($_POST['msg']);

    // $pdostatement = $pdo->prepare('INSERT INTO commentaire(pseudo, message, date_enregistrement) VALUES(:pseudo, :message, NOW() ) ');

	// 	//Justification des marqueurs:
	// 	$pdostatement->bindValue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
	// 	$pdostatement->bindValue(':message', $_POST['msg'], PDO::PARAM_STR);

	// 	$pdostatement->execute(); //exécution de la requête
    // }

    
    // 6 - Affichage des messages

    $pdostatement = $pdo->query('SELECT * FROM commentaire ORDER BY id_commentaire DESC');

    while($commentaire = $pdostatement->fetch(PDO::FETCH_ASSOC)){

        echo '<div style="boder: 1px solid;">';
                echo "<p>$commentaire[pseudo]</p>";
                echo "<p>$commentaire[message]</p>";
                echo "<p>$commentaire[date_enregistrement]</p>";
        echo '</div>';
    }
    

    // 7 - Affichage du nombre de message

    echo 'Nombre de commentaires :' .$pdostatement->rowCount();

//-----------------------------------------------------------------------------------//
// Exemple de failles (pour cette exemple, mettre la question 5 en commentaire)

if($_POST){

    $pdostatement = $pdo->exec("INSERT INTO commentaire(pseudo, date_enregistrement, message) VALUES('$_POST[pseudo]',NOW(),'$_POST[message]')");
}

// Faille xss :

// <style>body{display:none;}</style>


//Faille SQL :

// ok') DELETE FROM commentaire;(
?>

