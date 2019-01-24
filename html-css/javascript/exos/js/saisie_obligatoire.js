var nbr;

do {
    nbr = Number(prompt("saisir un nombre obligatoire ?"));
} while (isNaN(nbr));

console.log(nbr);