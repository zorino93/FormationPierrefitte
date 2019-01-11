/**
 * LES BOUCLES
 */

//-- La boucle FOR

/**
 * LA Boucle for
 * 1. On initialise un compteur que l'on stock dans une variable
 * 2. On défini la condition qui doit être vrai
 * 3. On incrémente ou on décrémente
 */

for (var i = 1; i <= 10; i++) {
    document.write("Tour de boucle n°" + i + "<br>");
}

/**
 * la boucle while
 * Très utilisée quand on ne connait pas le nombre de tour de boucle à l'avance
 */

var j = 1;

while (j <= 10) {
    document.write("<hr>");
    j++;
}



/**
 * Voici une boucle qui va de 0 à 9
 * 1. Faire une boucle qui va de 7 à 77
 * 2. Faire une boucle qui va de 0 à 100(0..10..20..)
 */



var j = 7;

while (j <= 77) {
    document.write("<hr> <p>boucle n°</p>" + j);
    j++;
}


var j = 0;

while (j <= 100) {
    document.write("<hr> <p>boucle n°</p>" + j);
    j += 10;
}



for (var i = 0; i <= 100; i += 10) {
    document.write("<hr> Tour de boucle n°" + i + "<br>");
}



/**
 * Ecrivez une boucle while qui se répète tant que l'utilisateur n'a pas entré une
 * valeur correcte via prompt(). En d'autres mots, prompt() s'affiche à chaque
 * exécution de la boucle. Si l'utilisateur entre quelque chose, la boucle
 * s'arrête, et une alert() affiche la valeur entrée dans le prompt(). Si
 * l'utilisateur clic sur Annuler ou ne rentre pas de texte, la boucle continue et
 * réaffiche une nouvelle prompt().
 */


var input = '';

while (true) {
    input = prompt('Entrer le nom de code');

    if (input === 'vrai') {
        break;
    }

}

alert(input);




/**
 * 1- Tester les instructions document.write en affichant au
 * minimum un nombre, une phrase, le contenu d'une variable, la valeur de π (pi)
 * et, enfin, un entier choisi aléatoirement entre 0 et 100.
 * 2- Moduler l'affichage en fonction d'un test. Par exemple, définir une variable
 * contenant une température, puis comparer cette variable à une valeur seuil,
 * afficher un message si la température est inférieure, un autre message si elle
 * est supérieure.
 * 3- Comparer les boucles while et for pour compter jusqu'à 100.
 * 4- Utiliser des boucles, puis des boucles imbriquées, pour dessiner des figures
 * géométriques, pleine ou creuses : une ligne, un carré, un triangle.
 * 5- Toujours en utilisant les boucles de JavaScript, produire une table de
 * multiplication pour les entiers compris entre 0 et 9.
 * 6- Reprendre les questions précédentes en agrémentant systématiquement le contenu produit de balises HTML (par exemple, les balises de tableau pour profiter des alignements dans les figures).
 */

// -- 1
document.write('bonjour !');

// -- 2
var temperature = 12;
if (temperature <= 12) {
    document.write('il fait chaud !');

}

else {
    document.write('il fait chaud !');
}

// -- 3

for (var i = 1; i <= 100; i++) {
    console.log("je suis une boucle FOR" + i);

}

var a = 1;
while (a <= 100) {
    console.log("je une boucle while" + a);
    a++;

}

// -- 4

document.write('<table border="1">');
document.write('<tr>'); /* début de ligne */
for (var i = 1; i <= 10; i = i + 1) {
    document.write('<td>');
    document.write('*');
    document.write('</td>');
}
document.write('</tr>'); /* fin de ligne */
document.write('</table>');
document.write('<br><br><br>');

// Carré
/* un carré 10x10 d'étoiles, dans un tableau HTML */
document.write('<table border="1">');
for (var j = 1; j <= 10; j = j + 1) {
    document.write('<tr>'); /* début de ligne */
    for (var i = 1; i <= 10; i = i + 1) {
        document.write('<td>');
        document.write('*');
        document.write('</td>');
    }
    document.write('</tr>'); /* fin de ligne */
}
document.write('</table>');

// Carré + Image
/* un carré 10x10 d'images, dans un tableau HTML */
document.write('<table>');
for (var j = 1; j <= 10; j = j + 1) {
    document.write('<tr>'); /* début de ligne */
    for (var i = 1; i <= 10; i = i + 1) {
        document.write('<td>');
        document.write('<img src="images/chat.jpg" width="40" height="40">');
        document.write('</td>');
    }
    document.write('</tr>'); /* fin de ligne */
}
document.write('</table>');

// -- 5

document.write('<table>');
for (var i = 1; i <= 10; i++) {
    document.write('<tr>'); /* début de ligne */

    for (var j = 1; j <= 10; j++) {
        document.write('<td>');
        document.write(i * j);
        document.write('</td>');

    }
    document.write('</tr>'); /* fin de ligne */

}
document.write('</table>');

// -- 6


/**
 * EXERCICE
j'ai 1000€ sur mon compte
chaque mois j'ajoute 50€
combien de temps me faut - il pour avoir 2000€ sur mon compte ?
 */