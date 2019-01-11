var a = 2;

/**
 * Résultat = 1
 */
a = a - 1;

/**
 * Résultat = 2
 */
a++;


var b = 8;

/**
 * Résultat = 10
 */
b += 2;

/**
 * Résultat = 102
 */
var c = a + b * b;

/**
 * Résultat = 30
 */
var d = a * b + b;

/**
 * Résultat = 40
 */
var e = a * (b + b);

/**
 * Résultat = 10
 */
var f = a * b / a;

/**
 * Résultat = 10
 */
var g = b / a * a;

console.log(a + "\n" + b + "\n" + c + "\n" + d + "\n" + e + "\n" + f + "\n");


var nb1 = Number(prompt("Entrez nb1 :"));

var nb2 = Number(prompt("Entrez nb2 :"));

var nb3 = Number(prompt("Entrez nb3 :"));


if (nb1 > nb2) {

    nb1 = nb3 * 2;
    alert("resultat" + ' ' + nb1);

} else {

    nb1++;

    if (nb2 > nb3) {

        nb1 = nb1 + nb3 * 3;
        alert("resultat" + ' ' + nb1);

    } else {

        nb1 = 0;

        nb3 = nb3 * 2 + nb2;
        alert("resultat" + ' ' + nb1);

    }

}



