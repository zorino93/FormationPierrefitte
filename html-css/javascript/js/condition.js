// -- Structure de base IF
// if(maCondition){
//     // Par défaut la condition va vérifier si la condition à vérifier est vrai.
//     // Code à executer si la condition est vérifier.
// }

// var nb1 = 10;

//Si
// if (nb1 < 50) {
//     document.write("nb1 est inférieur à 50.");
// }

// Si, Sinon
// if (nb1 > 50) {
//     document.write("nb1 est supérieur à 50");
// }

// else {
//     document.write("nb1 est inférieur à 50");
// }

//EXERCICE
//On utilise le IF pour vérifier l'âge de l'internaute.
// => s'il est majeur je lui souhaite la bienvenue
// => s'il est mineur je [1] lui signale et [2] le renvoie vers un autre site


/*var majorite = 18;
var age = Number(prompt("Quel est votre âge ?"));

if (age >= majorite) {
    alert("Bienvenue sur le site");
    document.write("Vous êtes majeur !!");
}

else {
    alert("casse-toi tu n'as pas l'âge !!");
    document.location.href = "https://google.com";
}


var heure = 9;
var heure = Number(prompt("Quel heure est 'il ?"));

if (heure < 12) {
    alert("c'est le matin");
}

else if (heure == 12) {
    alert("Il est midi");
}

else if (heure <= 18) {
    alert("c'est l'après-midi");
}

else {
    alert("c'est le soir");
}*/


/**
 * EXERCICE :
 * 
 * Si le nom entrer est valide, ré ouvre une boite de dialogue demandant mon adresse mail, si le mail est valide, ouvre une boite de dialogue qui me demande mon mot de passe, si celui-ci est correct ouvre une boite de dialogue qui me souhaite la bienvenue(nom).
 */

/*var monPrenom = "mehdi";
var monLogin = "mehdi.hamdaoui01@gmail.com"
var pass = "Hamdaoui93"



var prenom = prompt("Entrer votre prénom ?");

if (prenom == monPrenom) {
    var login = prompt("Entrer votre mail ?");

    if (monLogin == login) {
        var passWord = prompt("Entrer votre mot de passe?");


        if (passWord == pass) {
            alert("bienvenur dans le site");
        }
        else {
            alert("mot de passe non valide !")
        }
    }
    else {
        alert("login non valide !")
    }

}
else {
    alert("Prénom non valide !")
}*/



/**
 * Créé une condition qui si pseudo équivaut à samba et son mail coressppond samba@mail.fr
Ouvre une 2 boite de dialogue qui demande age et année
si age est sup à 20 ou année de naissance est superieur à 2000
Ouvre une boite de dialogue qui si équivaut à vrai renvoi vers  le site de votre choix
Sinon fait recommencer depuis le début(reload) 
 */

/*var pseudo = prompt("Entrez votre pseudo"), mail = prompt("Entrez votre email");

if((pseudo == "samba") && (mail == "samba@gmail.com")){
   var age = Number(prompt("Quel est votre age")), annee = Number(prompt("Quel est votre année ?"));
   if ((age > 20) || (annee > 2000))
   {
       var vraiFaux = confirm("Vrai ou Faux");
       if (vraiFaux) {
           document.location.href = 'https://google.com';
       } else{
           location.reload();
       }
   }else {
           location.reload();
       }
}else{
           location.reload();
       }
*/


// EXERCICE 0
// demander deux nombres à l'utilisateur (dans deux champs distincts)
// au clic sur un bouton, afficher le résultat de la multplication
// exemple avec 4 et 5: "4 multiplié par 5 vaut 20"


/*var nb1 = Number(prompt("Entrer un  chiffre ou un nombre"));
var nb2 = Number(prompt("Enter un chiffre ou un nombre"));

if (nb1 && nb2) {
    alert(nb1 * nb2);
}*/


// EXERCICE 1
// créer un champ de texte
// au clic sur un bouton,
// changer la couleur de fond de la page avec la couleur donnée par l'utilisateur


var couleur = prompt("Entrez une couleur");

if (couleur == "noir") {
    document.body.style.backgroundColor = "#000";
} else if (couleur == "blue") {
    document.body.style.backgroundColor = "blue";
} else if (couleur == "rouge") {
    document.body.style.backgroundColor = "red";
} else if (couleur == "vert") {
    document.body.style.backgroundColor = "green";
} else {
    alert("couleur non défini !");
    location.reload()
}



// EXERCICE 2
// demander l'adresse d'une image à l'utilisateur via un champ de texte
// au clic sur un bouton, ajouter cette image à la page


/*var imageUrl = prompt("Entrer l'url de l'image");
if (imageUrl) {
    document.getElementById("img").src = imageUrl;
} else {
    location.reload();
}*/


// EXERCICE 3
// demander un nombre à l'utilisateur
// calculer le modulo de ce nombre divisé par 5
// Afficher le reste dans une phrase
// exemple avec 21 : "Si l'on divise 21 par 5, le reste est de 1" 

/*var nb1 = Number(prompt("Entrer un  chiffre ou un nombre"));

if (nb1) {
    alert(nb1 % 5);
}*/

/*var num = Number(prompt("Saisir un nombre"));
alert("Si l'on divise " + num + " par 5, le reste est de " + num % 5);*/

// EXERCICE 4
// créer une fonction qui demande l'âge de l'utilisateur
// afficher le nombre de jours vécus que cela représente
// exemple avec 21 : "Vous avez vécu 7665 jours."




// EXERCICE 5
// demander l'âge actuel de l'utilisateur et un âge visé
// (vous aurez donc besoin de deux champs)
// afficher le nombre de jours vécus que cela représente et l'écart avec l'âge visé
// exemple avec 21 et 45 : "Vous avez vécu 7665 jours. Il y a encore 8760 jours avant vos 45 ans."
// complément : si l'âge visé est plus petit que l'âge actuel, signaler l'erreur (alert ou affichage dans la page)




// EXERCICE 6
// documentation : étudiez le fonctionnement de confirm() en javascript
// Créer un confirm() Javascript
// si l'utilisateur clique sur oui, afficher une image
// sinon, afficher une autre image



var confirmation = confirm("change ?? ");
if (confirmation) {
    document.body.style.backgroundImage = "url(http://www.xgenstudios.com/gameImages/title%20card%20batch/raze-1.gif)";
} else {
    alert("false")
}


// EXERCICE 7
// demander un nombre entre 0 et 5 à l'utilisateur
// si l'utilisateur n'entre pas un nombre entre 0 et 5, le signaler par une alert
// si le nombre est valide, l'afficher en toutes lettres (1 => "un")
