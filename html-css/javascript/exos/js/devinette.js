// console.log("Bienvenue dans notre site");

// var b = Math.floor(Math.random() * 100) + 1;
// console.log(b);

// var i = Number(prompt("Saisir un nombre"));
// if (i == b) {
//     alert("Gagné !!!")
// } else {
//     alert("Perdu")
// }


console.log("Bienvenue dans ce jeu de devinette !");

var solution = Math.floor(Math.random() * 100) + 1;
console.log(solution);

var nombre = Number(prompt("Entrez un nombre :"));
var tentative = 0;

while ((nombre !== solution) && (tentative < 5)) {
    if (nombre > solution) {
        console.log(nombre + " est trop grand");
        tentative++;
    }
    else if (nombre < solution) {
        console.log(nombre + " est trop petit");
        tentative++;
    }
    var nombre = Number(prompt("Entrez un nombre:"));
}
if (nombre === solution)
    console.log("Bravo ! La solution est " + solution);
else
    console.log("Vous avez perdu!");