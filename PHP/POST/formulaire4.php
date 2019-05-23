<h1>Formulaire 4</h1>

<?php

print '<pre>';
    print_r($_POST);
print '</pre>';

if($_POST){ // si il y a un post (donc un submit) dans le formaulaire3.php

    if( empty( $_POST['pseudo'] ) ){ // si $_POST 'pseudo' est vide

        echo "Vous devez renseigner votre pseudo <br>";

    }

    if( empty( $_POST['mdp'] ) ){ // si $_POST 'pseudo' est vide

        echo "Vous devez renseigner votre mot de passe <br>";

    }

    else{
        echo 'Votre pseudo :' . $_POST['pseudo'] . '<br>';

    echo "Votre mot de passe: $_POST[mdp] <br>";

    }


}

//---------------------------------------------------------------------//

// Ecriture d'un fichier créé dynamiquement :

$fichier = fopen('liste.txt', 'a'); // fopen() en mode 'a' permet de créer un fichier s'il n'est pas trouvé, sinon il l'ouvre

fwrite($fichier, $_POST['pseudo'] . '=>' . $_POST['mdp'] . "\r\n");
// fwrite() permet d'écrire dans un fichier (ici, représenté par $fichier)
//"\r\n" : permet de faire un saut de ligne dans le fichier (attention à bien le mettre entre quillemet et non pas des quotes sinon il l'interprète comme un chaine)

$fichier = fclose($fichier);
// fclose() permet de fermer le fichier et libérer la ressource

?>

