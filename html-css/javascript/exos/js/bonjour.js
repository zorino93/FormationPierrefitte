var nom = prompt("quel est votre nom ?", "<Entrez ici votre nom>");

if (nom) {
    alert("Vous avez cliqué sur Annuler");

    var prenom = prompt("quel est votre prénom ?", "<Entrez ici votre prénom>");

    if (prenom == null) {
        alert("Vous avez cliqué sur Annuler");
    }
    else {
        alert("Bonjour " + nom + ' ' + prenom + ", ça roule ?");
    }
}

else {
    alert("Bonjour " + nom + ' ' + prenom + ", ça roule ?");
}