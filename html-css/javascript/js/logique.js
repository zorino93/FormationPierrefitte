var A = true, B = false;


var prenom = "Mehdi",
    monAge = 26,
    prenomLogin = prompt("Quel est votre prenom ?");

if (prenomLogin === prenom) {
    var age = Number(prompt("Quel est votre âge ?"));

    if (age === monAge) {
        alert("Bienvenue M." + prenomLogin);
    }

    else {
        alert("Âge invalide !");
    }
}

else {
    alert("Prénom invalide");
}

/**
 * L'opérateur logique AND(ET):&&
 * Vérifie si 2 conditions ou plus sont vrai ou fausse
 */


if ((prenomLogin === prenom)) && (age === monAge){

    alert("Bienvenue M." + prenomLogin);
    else {
        alert("Prénom invalide");
    }
}

if ((A) && (B)) {
    // => si A est FAUX et B VRAI => Retourne FAUX
    // => si A est VRAI et B FAUX => Retourne FAUX
    // => si A est FAUX et B FAUX => Retourne FAUX
    // => si A est VRAI et B VRAI => Retourne VRAI
}


/**
* L'opérateur logique OR(OU): ||
*/

if ((A) || (B)) {
    // => si A est FAUX ou B FAUX => Retourne FAUX
    // => si A est FAUX ou B VRAI => Retourne VRAI
    // => si A est VRAI ou B VRAI => Retourne VRAI
    // => si A est VRAI ou B VRAI => Retourne VRAI
}



/**
 * L'opérateur logique NOT(NON): !
 * Cette opérateur rend vrai ce qui est faux est inversement
 */

 var user = true;
 if(!user){
     //code si l'utilisateur n'est pas loggé
 }

 // ce qui revient à écrire :
 if (user == false){
     
 }
