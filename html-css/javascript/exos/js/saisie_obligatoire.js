// var nbr;

// do {
//     nbr = Number(prompt("saisir un nombre obligatoire ?"));
// } while (isNaN(nbr));

// console.log(nbr);

'user strict';

var nombre;

// Ici j'utilise la boucle do...while qui s'execute au moins une fois avant de la vérifié la condition

do {
    nombre = Number(prompt("Saisir un nombre"));
} while (isNaN(nombre) === true);
document.write('<p>Merci, vous avez saisi:' + nombre + '</p>');