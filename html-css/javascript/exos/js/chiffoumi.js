// var choixUtilisateur = prompt("Choisissez vous pierre, feuille, ou ciseau?");
// console.log(choixUtilisateur);

// var choixOrdi = Math.random();
// console.log(choixOrdi);

// if (choixOrdi === 0) {
//     console.log("pierre");
// }

// else if (choixOrdi <= 0.33) {
//     console.log("pierre");
// }

// else if (choixOrdi === 0.34) {
//     console.log("feuille");
// }

// else if (choixOrdi <= 0.66) {
//     console.log("feuille");
// }

// else if (choixOrdi === 0.67) {
//     console.log("ciseaux");
// }

// else {
//     console.log("ciseaux");
// }




// correction

// Mode strict du Javascript
// 'use strict';

var ordi, joueur, hazard;

// Récupération du choix du joueur
joueur = prompt("Que choisissez-vous: Pierre, Feuille ou Ciseaux");

// Récupération d'un nombre aléatoire entre 0 et 1
hazard = Math.random();

// Test du random
console.log(hazard);

// condition du choix de l'ordi

if (hazard <= 0.33) {
    ordi = 'Pierre';
} else if (hazard <= 0.66) {
    ordi = 'Feuille';
} else {
    ordi = 'Ciseaux';
}

// On affiche le choix de l'ordi

document.write("<p>Choix de l'ordinateur: " + ordi + "</p>");

// Condition  du résultat & du choix de l'utilisateur
// /!\ Attention javascript sensible à la casse
if (ordi === joueur) {
    document.write("<p>Vous avez choisi la même chose: Égalité</p>");
} else {
    switch (ordi) {
        case 'Ciseaux':
            if (joueur === 'Pierre') {
                document.write('<p>La pierre écrase le ciseaux: Vous avez gagné</p>');
            } else {
                document.write('<p>La feuille découpé par le ciseaux: Vous avez perdu</p>');
            }
            break;
        case 'Feuille':
            if (joueur === 'Pierre') {
                document.write("<p>La pierre et enveloppé la feuille: Vous avez perdu</p>");
            } else {
                document.write("<p>Le ciseaux découpe la feuille: Vous avez gagné</p>");
            }
            break;
        case 'Pierre':
            if (joueur === 'Feuille') {
                document.write("<p>La Feuille enveloppe la pierre: Vous avez perdu</p>");
            } else {
                document.write("<p>Les ciseaux sont écrasé par la pierre : Vous avez gagné</p>");
            }
    }
}