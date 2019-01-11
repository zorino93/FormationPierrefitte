var prixHT = Number(prompt("Saisir un prix hors taxes"));

tva = prixHT / 100 * 20;

prixTTC = tva + prixHT;

alert(prixTTC);
console.log(prixTTC); /** Afficher dans la console */
document.write(prixTTC);/** Afficher dans la page */