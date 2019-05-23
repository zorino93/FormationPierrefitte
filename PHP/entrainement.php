<!-- On peut écrire du html dans un fichier avec l'extension '.php' Mais l'inverse n'est pas possible !! -->
<style>
h2{
    background:black;
    color:white;
    font-size:20px;
}
</style>

<h2>Ecriture et affichage</h2>

<?php

    // ici, on ouvre un passage PHP, pour y faire des traitements php
    /*
        commentaires
        sur plusieurs
        lignes
    */

    // CHAQUE INSTRUCTION DOIT SE TERMINER PAR UN POINT VIRGULE!

?> <!-- balise fermante php -->

<p>Voici des balises html</p>

<?php

echo 'Bonjour tout le monde'; // echo est instruction qui permet d'effectuer un affichage

echo'<br><hr>'; // On peut y mettre du HTMl

print '<strong>Hello</strong>'; // print est aussi une instruction qui permet d'effectuer un affichage

?>

<?='<br> salut <br>'; // le '=' remplace le 'php echo' ?>
<?php echo'salut <br>' ;// meme rendu que la ligne du dessus ?>

<h2>Les Variables : types, déclaration, affectation</h2>

<?php 

// Une variable est un espace nommé qui permet de conserver une ou plusieurs valeur

// déclaration d'une variable , avec le signe '$' (convention: one ne doit pas nommer notre variable en commençant par '_' ou un chiffre).

$a = 456;

echo gettype ($a).'<br>';

// gettype(): fonction prédéfinie qui permet de connaitre le type d'une variable (ici, 'intégrer').


$a = 1.2;

echo gettype($a).'<br>'; // affiche 'double' (car c'est un nombre à virgule).


$a = 'Une chaine de caractères';

echo gettype($a).'<br>';// affiche 'String' (équivalent à VARCHAR).


$a = "456";

echo gettype ($a).'<br>'; // affiche 'String' , car le nombre est entre guillemets et est donc interprété comme une chaine de caractères.


$a = true; // ou false

echo gettype ($a).'<br>'; // affiche boolean.

//---------------------------------------------------------------------------------//

echo '<h2>La concaténation</h2>';
// On concatène avec le symbole '.'

$x = 'Bonjour';
$y = 'tout le monde.';

echo $x . '=>' . $y . '<br>';

//---------------------------------------------------------------------------------//

// Les doubles quotes (guillmets) permettent d'interpréter les variables alors que les quotes simples (apostrophe) n'interprètent pas les variables et renverra une chaine de caractères.

echo '$x $y <br>'; // affiche : $x $y (=> quotes simples)
echo "$x $y <br>"; // affiche : Bnonjour tout le monde (=> quotes doubles)

echo '<strong>', $x ,'</strong><br>'; // Concaténation possible avec le symbole ','

//---------------------------------------------------------------------------------//

echo '<h2>La concaténation lors de l\'affectaton</h2>';

$prenom = 'Marco'; // declaration et affectation
echo $prenom .'<br>'; // Affiche Marco

$prenom = 'Polo'; // Reaffectation  (ecrase et remplace) la variable prenom

echo $prenom . '<br>'; // Affiche Polo

$prenom2 = 'Anne';
$prenom2 .= 'Marie'; // Affectation de la valeur 'Marie' sur la variable $prenom2 mais cela s'ajoute sans remplacer la valeur précédente grace à l'opérateur '.='

echo $prenom2 . '<br>'; // Afficher Anne Marie


//---------------------------------------------------------------------------------//

echo '<h2>Constantes et constantes magiques</h2>';

// Une constante : est un espace nommé qui permet de conservé une valeur sauf que comme l'indique son nom, la valeur est CONSTANTE !

define('CAPITALE', 'Paris'); // Par convention une constante se déclare TOUJOURS en MAJUSCULE

// define(ARG1, arg2);
// ARG1 : nom de la constante
// arg2 : la valeur de la constante

echo CAPITALE . '<br>'; // Affiche le contenu de ma constante, ici 'Paris'

// Constante Magique :

echo __FILE__ . '<br>'; // chemin complet vers le fichier
echo __LINE__ . '<br>'; // affiche le numero de la ligne
echo __DIR__ . '<br>'; // affiche le chemin vers le dossier

//---------------------------------------------------------------------------------//

echo '<h3>Exercice</h3>';

// Afficher : 'bleu-blanc-rouge' (avec les tirets) en mettant chaque couleur en varable:

// $b = 'bleu';
// $b .= '-blanc'; 
// $b .= '-rouge';

// echo $b . '<br>';

$a = 'bleu';
$b = 'blanc';
$c = 'rouge';

echo "$a-$b-$c <br>";
print $a.'-'.$b.'-'.$c.'<br>';

//---------------------------------------------------------------------------------//

echo '<h2>Guillemets et quotes</h2>';

$texte = "bonjour";

echo $texte. 'tout le monde <br>'; // concaténation

echo "$texte. tout le monde <br>"; // affichage entre guillemets où la variable est interprétée !!

echo '$texte. tout le monde <br>'; // affichage entre quotes où la variable n'est pas interprétée !!

//---------------------------------------------------------------------------------//

echo '<h2>Opérateurs arithmétiques</h2>';

$a = 10;
$b = 2;

echo $a + $b . '<br>'; // Afficher :12
echo $a - $b . '<br>'; // Afficher :8
echo $a * $b . '<br>'; // Afficher :20
echo $a / $b . '<br>'; // Afficher :5

// Opération et affectation :

$a += $b; // equivaut  $a = $a + $b

echo $a . '<br>'; // afficher :12


$a -= $b; // equivaut  $a = $a - $b

echo $a . '<br>'; // afficher :10


$a *= $b; // equivaut  $a = $a * $b

echo $a . '<br>'; // afficher :20


$a /= $b; // equivaut  $a = $a / $b

echo $a . '<br>'; // afficher :10


//---------------------------------------------------------------------------------//

echo '<h2>Structure conditionnelles (if/else)</h2>';

// isset() empty()
    // isset(): teste si ça existe (si c'est défini)
    // empty(): teste si c'est vide (ou 0, si c'cest pas défini)

$vara = 0;
$varb = '';

if( empty($vara) ){ // Si c'est vide, 0 ou non défini

    echo 'vara: 0, vide ou non défini <br>';
}

if( isset($varb) ){ // si la variable $varb existe

    echo 'varb : existe et est défini par rien <br>';
}

//---------------------------------------------------------------------------------//

// IF / ELSEIF / ELSE :

$a = 10;
$b = 5;
$c = 2;

if($a > $b){ // si A (10) est supérieur à B (5)

    echo 'A est bien supérieur à B <br>';

}
else{ // Sinon... (cas par défaut)
    echo "A n'est pas supérieur à B <br>";

}

//---------------------------------------------------------------------------------//

// => ET : &&

if($a > $b && $b > $c){ // Si A est supérieur à B ET (&&) que B est supérieur à C

    echo 'Ok pour les deux condition <br>';
}

//---------------------------------------------------------------------------------//

// => Ou : ||

if($a == 9 || $b > $c){ // Si A est égale à 9  OU (||) que B est supérieur à C

    echo 'Ok pour au moins une des deux condition <br>';
}

//---------------------------------------------------------------------------------//

if($a == 8){ // Si A est égale à 8

    echo '1 - A est égale à 8 <br>';
}

else if ($a != 10){ // Sinon si A est différent de 10 

    echo '2 - A est différent de 10 <br>';
}

else{ // Sinon ...
    echo '3 - Tout est faux <br>';
}

//---------------------------------------------------------------------------------//

// XOR : seulement l'une des conditions doit être vraie

if($a == 10 XOR $b == 6){

    echo 'Ok Pour une condition exclusive <br>';
    // Si les deux conditions sont vraies ou que les deux sont fausses, on ne rentre pas dans le if !
}

//---------------------------------------------------------------------------------//

// forme constante ( condition ternaire)

// le '?' remplace le 'if' et les ':' remplace le 'else'

echo ($a == 10) ? "A est egal à 10<br>" : "A n'est pas égal à 10<br>";

// Exactement la même chose que l'instruction du dessus

if($a == 10){

    echo "A est egal à 10<br>";
}

else{

    echo "A n'est pas égal à 10<br>";
}

$var1 = isset($maVar)? $maVar : 'valeur par defaut<br>';

// Si $maVar existe, on affecte à $var1 la valeur de la $maVar Sinon on affecte l'information par defaut

echo $var1 . '<br>';

$var2 = $maVar ?? 'valeur par defaut<br>';

// '??' <=> soit l'un soit l'autre

echo $var2 . '<br>';

// Comparaison :


$vara = 1; // int

echo '$vara est un :'. gettype($vara) .'<br>';

$varb = "1"; // String

echo '$varb est un :'. gettype($varb) .'<br>';

if($vara == $varb){// renvoie true

    echo "Il s'agit de la même chose car la valeur est la même<br>";
}


if($vara === $varb){// renvoie false

    echo "Il s'agit de la même chose<br>";
}
else{
    echo "l'égalité est fausse, puisque le type est différent alors que la valeur est la même<br>";
}

/* Avec le '===', le test ne fonctionne pas car le type des variables sont différentes. l'un est un entier (INT) et l'autre est une chaine (STRING) donc ce n'est pas égal

    '=' : affectation
    '==' : comparaison de valeur
    '===' : comparaison de la valeur ET du type
*/ 


//---------------------------------------------------------------------------------//

echo '<h2>Condition SWITCH</h2>';

$couleur = 'jaune';

switch( $couleur ){ // Ici, je compare ma variable $couleur aux différents cas du switch

    case 'bleu';
        echo 'vous aimez le bleu<br>';
    break;

    case 'rouge';
        echo 'vous aimez le rouge<br>';
    break;

    case 'vert';
        echo 'vous aimez le vert<br>';
    break;

    default ://cas par defaut si on ne rentre pas dans les cas précédents
     echo "vous n'aimez pas la couleur<br>";
    break;
}

//---------------------------------------------------------------------------------//

// Exercice : retranscrire le switch en if/ elseif / else

if($couleur == 'bleu'){
    echo 'vous aimez le bleu<br>';
}
else if($couleur == 'rouge'){
    echo 'vous aimez le rouge<br>';
}
else if($couleur == 'vert'){
    echo 'vous aimez le vert<br>';
}
else{
    echo "vous n'aimez pas la couleur<br>";
}

//---------------------------------------------------------------------------------//

echo '<h2>Fonctions prédéfinies de php</h2>';

echo 'Date :'.date("d/m/y").'<br>';

$mail = 'jeremie@poles.fr';

echo strpos($mail,"@") . '<br>'; // strpos() indique la position d'un caractère dans ma chaine

    // => ATTENTION : ici, on affiche 7 car on commence à compter à partir de ZERO !!

    $phrase = "voici une phrase";

    echo iconv_strlen($phrase); // permet de retourner la taille de la chaine

    $texte = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque laboriosam harum numquam modi illum facere officiis tempora deserunt, magni error in perspiciatis doloremque qui blanditiis! Excepturi voluptatibus tempore quasi sint.";

    echo substr($texte, 0, 20) . "...<a href=''>Lire la suite</a><br>";

    // substr (arg1, arg2, arg3) permet de retournet une partie d'une chaine

            // arg1 : la chaine que l'on souhaite couper
            // arg2 : la position de départ
            // arg3 : la position de fin

//---------------------------------------------------------------------------------//

echo '<h2>Fonctions utilisateurs</h2>';

function separation(){ // Déclaration d'une fonction prévue pour ne pas recevoir d'argument

    echo '<hr><hr><hr>'; // trois traits de séparation
}

separation(); // Appel et exécution de la fonction

//---------------------------------------------------------------------------------//

function bonjour($qui){// fonction avec argument (ici, $qui)

    return "Bonjour $qui <br>";
}

echo bonjour('marco');

// Si la fonction est prévue pour reçevoir un argument ALORS il faut lui envoyer un argument en paramètre

// Quand il y a un 'return' dans la fonction, il faut faire un 'echo' de la fonction pour avoir un affichage.

$prenom ='Bob';

echo bonjour($prenom);

//---------------------------------------------------------------------------------//

function jourSemaine(){

    $jour = "mercredi"; // variable locale

    return $jour; // la fonction va retourner quelque chose ET à ce moment la on quitte la fonction

    echo 'salut'; // cette ligne ne fonctionne pas car il y a un 'return' avant !
}

echo jourSemaine().'<br>'; // Ici, on demande l'affichage, on appel et exécute la fonction

// echo $jour; // error undefined car elle n'est pas définie dans l'espace global mais uniquement dans le scope de ma fonction (local).

//---------------------------------------------------------------------------------//

function tva($nombre){

    return $nombre*1.2;
}

echo '100 € avec un taux de 20% est égal à :'. tva(100) . '€<br>';

//---------------------------------------------------------------------------------//

// Exercice : améliorez la fonction tva() afin que l'on puisse calculer un nombre avec le taux de notre choix: (bonus mettre un taux par defaut)

        // Impossible de nommer 2 fonction de la même façon !


        function tva2($chiffre, $nombre = 950){

            return $chiffre*$nombre;

        }

        echo tva2(20,50).'€ <br>';

//---------------------------------------------------------------------------------//

meteo("hiver", 12); // Il est possible d'exécuter une fonction avant qu'elle ne soit déclarée dans le code

function meteo($saison, $temperature){

    echo "<br> Nous sommes en $saison et il fait $temperature degré(s) <br>";
}

//---------------------------------------------------------------------------------//

// Exercice : Gérer le 's' de degré si on est au dessus de 1° ou en dessous de -1° et l'article 'au' si la saison est 'printemps'

function meteo2($saison, $temperature){

  if($temperature > 1 || $temperature < -1){

    // si la température est strictement supérieur à 1 OU que la temprérature est strictement inférieur à -1 on declare une variable avec le 's' à degré

    $degre = 'degrés';

  }
  else{ // sinon (on se trouve dans l'intervale [-1 : 1]) on crée une variable sans le 's'
      $degre ='degré';
  }

  if($saison == 'printemps'){ // si saison est egal à printemps, on déclare une variable avec 'au'
      $article ='au';
  }
  else{ // sinon, on crée une variable avec 'en'

    $article = 'en';
  }

  // Ici, on affiche la phrase avec les variables issues des condition
  echo "<br> Nous sommes $article $saison et il fait $temperature $degre <br>";
}

meteo2("hiver", -1); 
meteo2("automne", 1); 
meteo2("printemps", 12); 
meteo2("été", 24); 
meteo2("hiver", -1); 

//Les opérateurs : Pour tester les variables, on peut utiliser TOUS les opérateurs de comparaison
		/*
			égal : '==' renvoie TRUE si les opérandes sont égales
			différent de : '!=' renvoie TRUE si les opérandes NE SONT PAS EGALES
			strictement égal : '===' renvoie TRUE si les opérandes sont EGALES ET DU MEME TYPE
			strictement différent : '!==' renvoie TRUE si les opérandes sont NE SONT PAS EGALES OU NE SONT PAS DU MEME TYPE
			plus grand que : '>'
			plus grand ou égal à : '>='
			plus petit que : '<'
			plus petit ou égal à : '<='
		*/
        //Les instructions renvoient toujours TRUE ou FALSE et les instructions de la condition de seront exécutées QUE si la valeur renvoie TRUE !
        
//---------------------------------------------------------------------------------//

$pays ='France'; // Déclaration d'une variable dans l'espace global

function affichePays(){

    global $pays; // le echo qui t ne fonctionnerait pas si nous n'avions pas mis le mot 'global ' qui permet d'impoter tout ce qui est déclaré dans l'espace global à l'intérieur de l'espace local (ici, le scope de ma fonction)

    // $pays = 'Maroc'; // ok si la variable est déclaré dans l'espace local, cela fonctionne

    echo $pays;

}

affichePays(); // Appel et exécution de la fonction

//---------------------------------------------------------------------------------//

echo '<h2>Structures itéractives : les boucles</h2>';

// boucle while :

$i = 0; // initialisation 

while($i < 5){ // condition : Tant que  $i est inférieur à 5, on exécute le code entre les accolades

    echo "$i =>";

    $i++; // incrémentation ($i++ <=> $i = $i + 1)

}

// Résultat : 0 =>1 =>2 =>3 =>4 =>
echo '<br>';

//---------------------------------------------------------------------------------//

//Exercice : Enlever la flèche à la fin 
//(Résultat attendu : 0 =>1 =>2 =>3 =>4)

$i = 0; // initialisation 

while($i < 5){ // condition

    if($i == 4){  // si $i est egal à 4, on affiche 4 
         echo $i;
    }

    else{  // sinon.. on affiche $i et la flèche 
         echo "$i =>";
    }

 $i++; // incrémentation
}

echo '<br>';

//---------------------------------------------------------------------------------//

// boucle for :

for ($i=0; $i < 11 ; $i++) { //initialisation ; condition; incrémentation
    
    echo $i . '<br>';
}

//---------------------------------------------------------------------------------//

// Exercice : Afficher un select avec 31 option via une boucle for et dans le sens inverse

echo '<select>';

for($i=31; $i>0; $i--)
{
echo '<option>'.$i.'</option>';
}

echo '</select>';

// sens "à l'endroit"
echo '<select>';

for($i=1; $i<32; $i++)
{
echo '<option>'.$i.'</option>';
}

echo '</select>';

// Exercice : Afficher les numéros de 1 à 10 dans un tableau sur une ligne

echo '<table border = "1"><tr>';

    for($i=1; $i<=10; $i++)
{
echo '<td>'.$i.'</td>';
}

echo '</table></tr>';

//---------------------------------------------------------------------------------//

// Boucle imbriquées :
// objectif : Créer un tableau avec 10 lignes contenant 10 cellules allant de 1 à 100 via des boucles :

    $k = 1;

echo '<hr><table border = "1">';

    for($i=1; $i<=10; $i++){ // Création des 10 lignes (10 tours de boucles)

    echo '<tr>';
    for ($j=1; $j <=10 ; $j++) {  // Création des 10 cellules (10 tours de boucles)

        echo "<td>$k</td>";

        $k++;
    }

    echo '</tr>';
}

echo '</table></tr>';

//---------------------------------------------------------------------------------//

echo '<h2>Les inclusions</h2>';

echo 'Première fois : <br>';
include("exemple.inc.php");

echo '<br> Deuxième fois :';
include_once("exemple.inc.php"); // le 'once' vérifie si le fichier a déjà été inclus. Si c'est le cas, il ne le ré-inclus pas


echo '<hr>Première fois : <br>';
require("exemple.inc.php");

echo '<br> Deuxième fois :';
require_once("exemple.inc.php"); 

// Différence entre include et require :
    // Inclure fait une erreur et continue l'éxécution du script
    // require fait une erreur et stop l'éxécution du script


//---------------------------------------------------------------------------------//

echo '<hr><h2>Les Arrays</h2>';

// Déclaration d'un array que l'on stock dans une variable : 

$liste = array ('marco','polo', 'jean', 'jacques');

var_dump($liste);

echo '<hr>';

print '<pre>'; // la balise <pre> en html permet de formater le texte

    print_r($liste);

print '</pre>';

//---------------------------------------------------------------------------------//

echo '<hr><h2>Boucle foreach + arrays</h2>';

// la boucle foreach fonctionne UNIQUEMENT sur des tableaux et les objets. Elle retournera une erreur si l'on tente de l'exécuter sur une variable d'une autre type qu'un array (ou objet)
// foreach permet de passer en revu les données d'un tableau :

$tableau = ['pomme','fraise' , 'poire'];

$tableau[] = 'peche'; // Autre moyen d'affecter une valeur à mon tableau.

var_dump($tableau);


print '<pre>'; 

    print_r($tableau);

print '</pre>';

// Afficher 'poire' :

echo $tableau[2].'<br>';

//---------------------------------------------------------------------------------//

// Le mot clé 'as' est obligatoire, il fait parti de la boucle foreach.

// si il y a deux variables en argument après le mot clés 'as', le premier parcours la colonne des indices et le second parcours la colonne des valeurs

foreach ($tableau as $key => $value) {
    echo $key. '->' . $value . '<br>';
}

//---------------------------------------------------------------------------------//

// si il n'y a qu'une seule variable en argument après le mot clé 'as', alors cette variables (ici, $value parcours les valeurs du tableau)


foreach ($tableau as $value) {
    echo  $value . '<br>';
}

//---------------------------------------------------------------------------------//

// Autre syntaxe : ici, on remplace les accolades par ':' (accolade ouvrante) et endforeach (accolade fermante)

foreach ($tableau as $key => $fruit) :
    echo $fruit . '/';

endforeach;

echo '<br>';

//---------------------------------------------------------------------------------//

// Possibilite de choisir les indices :

$couleur = array('j' => 'jaune', 'b' => 'bleu', 'v' => 'vert');

print '<pre>';

print_r($couleur);

print '</pre>';

// afficher 'jaune' :

echo $couleur['j'] . '<br>';

//---------------------------------------------------------------------------------//

// count() et sizeof() : permettent de renvoyer la taille d'un tableau

echo 'Taille du tableau : '. count($couleur) .'<br>';
echo 'Taille du tableau : '. sizeof($couleur) .'<br>';


//---------------------------------------------------------------------------------//

echo '<hr><h2>Les arrays multidimmentionnels</h2>';

// Les arrays multidimmentionnels sont des tableaux imbriqués dans un autre tableau

$multi = array(
                0 => array( 'prenom' =>'marco','nom'=>'polo'),
                1 => array( 'prenom' =>'jean','nom'=>'paul'),
                2 => array( 'prenom' =>'oui','nom'=>'oui'),
                3 => array( 'prenom' =>'bob','nom'=>'marley')
                
);

print '<pre>';
    print_r($multi);
print '</pre>';

// Afficher 'bob' :

echo '$multi[3]["prenom"] donne :' . $multi[3]['prenom'] . '<br>';


for($i=0; $i < sizeof($multi);$i++){

    echo $multi[$i]['prenom'] . '<br>';
}

//---------------------------------------------------------------------------------//

echo '<hr><h2>Les objets</h2>';

// Un objet est un autre type de données. Un peu à la manière des arrays, il permet de regrouper des informations.
// Ici, on parle de propriétés (=variables) et de méthodes (=fonctions)

class Etudiant{

    public $prenom = 'jeremie'; // 'public' permet de dire que l'élément sera accessible partout (il existe aussi 'prenom' et 'protected')

    public $age = 45;

    public function pays(){

        return 'France';
    }

}

// Un objet est un conteneur symbolique, qui possède sa propre existence et incorpore des informations et des mécanismes

$objet = new Etudiant(); // le mot clé 'new' permet d'instancier(déployer) la classe et d'en faire un objet. On se servira de ce qu'il ya dans la classe via l'objet

print '<pre>';
    print_r($objet);
print '</pre>';

echo $objet->prenom .'<br>';
echo $objet->age .'<br>';

// Dans un array, on va piocher les infos avec des crochets [] alors que pour les objets, on utilise la flèche '->' pour accéder aux infos de la classe.

echo $objet->pays() . '<br>'; // Appel d'une méthode toujours avec des parenthèses

