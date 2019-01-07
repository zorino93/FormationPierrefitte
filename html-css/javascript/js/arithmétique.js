var nb1, nb2, resultat;
nb1 = 10;
nb2 = 5;

// --1. Addition
resultat = nb1 + nb2;
document.write(resultat + "<br>");

// --1. Soustration

resultat = nb1 - nb2;
document.write(resultat + "<br>");


// --1. Multiplication

resultat = nb1 * nb2;
document.write(resultat + "<br>");


// --1. Division

resultat = nb1 / nb2;
document.write(resultat + "<br>");


// --1. Modulo
// --1. Le Modulo retourne le reste de la division

resultat = nb1 % nb2;
document.write(resultat);



// --Et maintenant on réaffect nb1
nb1 = 11;
resultat = nb1 % nb2;
document.write("Le reste de la division (ou modulo) de" + ' ' + nb1 + " par " + nb2 + " est égale à: " + resultat + "<br>" + "============================================<br>");

// Ecriture Simplifier

// --1. Addition
nb1 += 5;
document.write(nb1 + "<br>");

// --1. Soustration

nb1 -= 5;
document.write(nb1 + "<br>");


// --1. Multiplication

nb1 *= 5;
document.write(nb1 + "<br>");


// --1. Division

nb1 /= 5;
document.write(nb1 + "<br>");


// --1. Modulo
// --1. Le Modulo retourne le reste de la division

nb1 %= 5;
document.write(nb1);

// Incrémentation

var nb3 = 1;
// La variable nb3 stock la valeur 1, puis on lui réaffecte la valeur nb3 +1.
nb3 = nb3 + 1; // résultat 2
// Ecriture simplifier incréùentation
nb3++;
document.write(nb3 + "<br>");

++nb3;
document.write(nb3 + "<br>");


//Décrémentation

nb3 = nb3 - 1;
nb3--;
document.write(nb3);
