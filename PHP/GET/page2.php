<h1>PAGE 2</h1>

<?php

//$_GET représente l'URL, il s'agit superglobale, et il faut absolument qu'elle soit écrite en MAJUSCULE sinon ça ne fonctionne pas !

print'<pre>';
    print_r($_GET);
print'</pre>';

if($_GET){ // Si il y a ue information dans l'url

echo "Parametre 1 :" . $_GET['article'].'<br>';
echo "Parametre 2 :" . $_GET['couleur'].'<br>';
echo "Parametre 3 :" . $_GET['prix'].'<br>';
}

/**
 * fichier.php?couleur=jean&couleur=rouge&prix=123
 * <=>
 * fichier.php?cle=valeur&cle=valeur&cle=valeur
 * 
 * Pour récupérer la valeur, il faut préciser la clé entre crochet avec la superglobale $_GET, car toutes les superglobales sont des arrays !
 * 
 * Pour faire passer des informations dans l'url, il faut commencer par mettre un '?' et ensuite la lcé suivi d'un '=' et la valeur correspondante. Si on veut faire plusieurs informations dans l'URL, je les sépare ensuite d'un '&'.
 */

?>

