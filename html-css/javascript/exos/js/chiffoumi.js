var choixUtilisateur = prompt("Choisissez vous pierre, feuille, ou ciseau?");
console.log(choixUtilisateur);

var choixOrdi = Math.random();
console.log(choixOrdi);

if (choixOrdi === 0) {
    console.log("pierre");
}

else if (choixOrdi <= 0.33) {
    console.log("pierre");
}

else if (choixOrdi === 0.34) {
    console.log("feuille");
}

else if (choixOrdi <= 0.66) {
    console.log("feuille");
}

else if (choixOrdi === 0.67) {
    console.log("ciseaux");
}

else {
    console.log("ciseaux");
}