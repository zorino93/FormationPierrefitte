var textarea = document.getElementById('tweetContent'),
    compteur = document.querySelector('#counterBlock');

function compteurString() {
    // Calcul la longueur de la chaine caractère
    var compte = 140 - textarea.nodeValue.length;

    // Affiche la valeur dans le p
    compteur.innerHTML = compte;

    // Si le comtpe descend en dessous de 0 on ajoute la classe "red" au p
    if (compte <= 0) {
        compteur.classList.add("red");
    } else {
        compteur.classList.remove("red");
    }
}

// On écoute l'évènement
textarea.addEventListener('keyup', compteurString);

// On appel la fonction 
compteurString();

