// commentaire sur ligne
/**
 * un
 * commentaire
 * sur
 * plusieurs
 * lignes
 */

/**
 * Les variables
 * Une variable est un conteneur servant à stocker temporairement une information (ou donnée). En javascript on déclare une variable avec le mot-clé: "var" suivi du nom de la variable, chaque variable doit avoir un nom unique (également appeler en anglais "identifier").
 * Le nom d'une variable doit observer quelque règles à savoir:
 * Le nom d'une variable doit commencer par une lettre;
 * Le nom d'une variable ne peut contenir que des lettres(non accentuées), des chiffres ou signes "_" et "$";
 * Le nom d'une variable est sensible à la casse c'est à dire que "a" et différent de "A";
 * Le javascript possède des mots "réservés" qu'on ne peut utilisé pour créé une variable(ex: var, alert, ...).
 */

// On déclare une variable et on lui affecte immédiatement une valeur
var x = 25;
var X = 100;// celle-ci est différente de la var "x".

// On déclare plusieurs variables d'un coup
var nom = "Mehdi",
    prenom = "kevin",
    date = "30/04/92";

// On déclare une variable sans lui affecter de valeur, puis on lui affecte une valeur ensuite(Non recommandé).
var age;
age = 25;

// On déclare une variable vide à laquelle on affecte une valeur par la ensuite(Recommandé).
var ville = "";
ville = "Pierrefitte";
ville = "Paris";



/**
 * En javascript le signe égale(=) n'est pas un opérateur d'égalité mais un opérateur d'affectation c'est à dire qu'il sert à affecter (ou assigner) une valeur à une variable et non que la variable est égal à sa valeur. Ainsi on va pouvoir affecter différentes valeurs à une même variable dans le temps.
 */

x = x + 5;
console.log("nos variables sont:" + x + '\n' + X + '\n' + nom + ' ' + prenom + ' ' + date + '\n' + age + '\n' + ville)

/**
 * Les types de (valeur de) variables
 * Les types de valeurs vont avoir une influence sur notre code, puisqu'on ne stockera pas de la même façon un chiffre ou une chaine de caractères (un texte) par exemple dans la variable.
 * Nous ne pourrons pas non effectuer les mêmes opérations sur les variables selon le type de valeurs qu'elles stockent.
 * 
 * Le type Number:
 *  il va représenter tout nombre ou chiffre qu'il soit positif ou négatif, entier ou à virgule.
 *  Pour affecter une valeur de type number on utilise ni quillemet ni apostrophe.
 * /!\ Attention: en programmation on utilise des notations anglo-saxonne, ce qui signifie qu'il faut remplacer nos virgule par des points pour les nombres décimaux.
 */

var number = 25;
var number2 = -15;
var number3 = 1.09;

/**
 * Le type String
 * Il va représenter les chaînes de caractères c'est à dire les textes.
 * Pour affecter une chaîne de caractère àune variable il faut l'entourer avec des guillemets ou apostrophes.
 */

var texte = "lorem ipsum";
var desc = 'lorem ipsilum';

/**
 * cependant si la valeur stocker contient elle même des apostrophes ou des guillemets il faudra les échapper au moyen d'un antislash(\ )
 */

var dept = "Je suis du \"9.2\"";// Je suis dans des guillemets dons j'echappe l'guillemets

var dept = 'Je suis du "9.2"'

document.write(dept + "<br>");

var dept2 = 'J\'habite dans le 9.2';// Je suis dans des apostrophes dons j'echappe l'apostrophe

var dept2 = "J'habite dans le 9.2";

document.write(dept2 + '<br>');

/**
 * Le type boolean (booléen)
 * Un booléen en algèbre c'est une valeur binaire(soit 0 ou 1), en programmation un booléen va être soit la valeur true (vrai ou 1) soit la valeur false (faux ou 0)
 * pour affecter un booléen à une variable on utilise ni guillemet ni apostrophe. 
 */

var vrai = true;
var faux = false;

/**
 * Les autres types
 * Parmi les autres valeurs possible on peut citer la valeurs "null", qui correspond à la non connaissance à priori de la valeur. "undefined", qui correspond au fait de ne pas avoir défini de valeur pour notre variable. "NaN" qui signifie "Not Number" soit n'est pas un nombre. 
 */

var n = null,
    u = undefined,
    nn = NaN;

// /!\ Noter qu'il est possible de changer le type d'une valeur d'une variable, la nouvelle écrasera tout simplement l'ancienne.

var tt = 25;//type number
tt = true; // type boolean
tt = 1.09; // type null
tt = "tt"; // type string


/**
 * Pour tester le type de la valeur, on utilise généralement la méthode "typeof()"
 */
alert(typeof(tt));

// déclarer une variable de manière explicite ou implicite
var maVariable = 'toto';//"maVariable" est ce qu'on appelle une écriture camel case.

ma_Variable = 'toto';//"maVariable" est ce qu'on appelle une écriture snake case.

//Afficher une boite de dialogue

alert("je sert à afficher des données dans une boite de dialogue");

//Afficher dans une console

console.log("je sert à afficher des données dans la console");

// afficher dans le navigateur(page web)

document.write("je sert à afficher des données dans la page web");

// demander à l'utilisateur d'entrer une valeur

prompt("je sert à afficher des données dans une boite de dialogue qui va demander à l'utilisateur de rentrer des données");

//Méthode(ou fonction) parseInt(), la methode parseInt() renvoie un nombre ou un chiffre entier à partir d'une chaîne de caractère(string)

var unChiffre = "12";

document.write(unChiffre + '<br>');//12

document.write(typeof(unChiffre) + '<br>');//string

unChiffre = parseInt(unChiffre);

document.write(unChiffre + '<br>');//12

document.write(typeof(unChiffre) + '<br>');//number


//Méthode(ou fonction) parseFloat()

var nb_en_lettre = "12.22";

document.write(nb_en_lettre + '<br>');//12.22

document.write(typeof(nb_en_lettre) + '<br>');//string

nb_en_lettre = parseFloat(nb_en_lettre);

document.write(nb_en_lettre + '<br>');//12.22

document.write(typeof(nb_en_lettre) + '<br>');//number

//Méthode toString(), qui sert a convertir en chaîne de caractère

var nb_en_lettre = 258;

document.write(nb_en_lettre + '<br>');

document.write(typeof (nb_en_lettre) + '<br>');

nb_en_lettre = nb_en_lettre.toString(nb_en_lettre);

document.write(nb_en_lettre + '<br>');

document.write(typeof (nb_en_lettre) + '<br>');//number

alert("Hello, je me lance depuis le fichier script.js !!");