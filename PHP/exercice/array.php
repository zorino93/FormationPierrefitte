<?php
//1 - Déclarer un tableau array avec tous les fruits : pommes, cerises, peches, bananes

$fruit = array("pommes", "cerises", "peches", "bananes");
var_dump($fruit);

echo '<br><br>';
//2 - Déclarer un tableau array avec tous les poids suivants : 100, 500, 1000, 2000, 5000

$poids = array(100, 500, 1000, 2000, 5000);
var_dump($poids);

echo '<br><br>';

//3 - Afficher les 2 tableaux (print_r)

print '<pre>'; 

    print_r($fruit);

print '</pre>';

print '<pre>'; 

    print_r($poids);

print '</pre>';

//4 - Sortir le fruit 'cerise' avec le poids 500 en passant par vos tableaux pour les transmettre à la fonction calcul() et ainsi obtenir le prix


include('fonction.inc.php');


    echo calcul( $fruit[1], $poids[1] );

    echo '<br><br>';



//5 - Sortir tous les prix pour les cerises avec tous les poids (boucle)

foreach ($poids as $value) {

    echo calcul($fruit[1], $value);
}

echo '<br><br>';

//-----------------------------//
for($i=0 ; $i < sizeof($poids) ; $i++){

    echo calcul($fruit[1], $poids[$i]);

}

echo '<hr>';

//6 - Sortir tous les prix pour tous les fruits avec tous les poids (boucles imbriquées)

foreach ($fruit as $value) {

    echo "<h2>$value</h2>";

    foreach ($poids as $info) {

    echo calcul($value, $info). '<br>';
}

}

echo '<br><br>';


//7 - Faire un affichage dans un tableau (table)  pour un affichage plus 'propre'

echo '<table border = "1">'; // ouverture du tableau
    echo '<tr>';  // ouverture ligne
        echo'<th>Poids</th>'; // Première cellule d'en-tête
                foreach($fruit as $value){ // on parcour le tableau $fruit pour afficher les fruits dans les en-tête
                    echo '<th>'. $value .'</th>';
                }
    echo '</tr>'; // fermeture ligne


                foreach ($poids as $kg) { // on parcour le tableau $poids dans la 1er celulle de chaque ligne.

                    echo '<tr>';// ouverture ligne

                        echo '<th>'. $kg .'</th>';

                        foreach ($fruit as  $info) { // on parcour le tableau $fruit pour récupérer les fruit à renseigner dans la fonction calcul()

                            echo '<td>'. calcul($info, $kg) .'</td>';
                        }

                    echo '</tr>'; // fermeture ligne
                }

echo '</table>'; // fermeture du tableau