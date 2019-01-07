var nb1 = 123, nb2 = "123";
/**
 * L'opérateur de comparaison "==" signifie l'égalité en valeur
 */
document.write(nb1 == nb2); // Retourne true
/**
* L'opérateur de comparaison "===" signifie l'égalité en type et valeur
*/
document.write(nb1 === nb2); // Retourne false
/**
 * L'opérateur de comparaison "!=" signifie l'inégalité en valeur
 */
document.write(nb1 != nb2); // Retourne false
/**
* L'opérateur de comparaison "!==" signifie l'inégalité en type et valeur
*/
document.write(nb1 !== nb2); // Retourne true


/**
 * EXERCICE :
 * J'arrive sur un Espace Sécurisé au moyen du prénom et de l'âge.
 * Je doit saisir mon prénom et mon age pour être authentifié sur
 * le site (les infos sont en BDD, ici dans mes variables prenom
 * et age).
 * En cas d'échec une alerte m'informe du problème.
 * Si tout se passe bien, un message de bienvenue m'accueille.
 */

var prenom = "Mehdi",
    monAge = 26,
    prenomLogin = prompt("Quel est votre prenom ?");

if (prenomLogin === prenom) {
    var age = Number(prompt("Quel est votre âge ?"));

    if (age === monAge){
        alert("Bienvenue M." + prenomLogin);
    } 
    
    else{
        alert("Âge invalide !");
    }
} 

else{
    alert("Prénom invalide");
}
