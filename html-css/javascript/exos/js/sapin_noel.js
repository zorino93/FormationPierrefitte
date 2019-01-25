var taille = Number(prompt("choisir un nombre d'étage du sapin"));

// On répète le nombre d'étage du sapin

for (var etage = 1; etage <= taille; etage++) {
    // pour chaque étage (e), nous avons i = e + 3(lignes)
    for(var i = 0; i < etage + 3; i++){
        // p our chaque ligne (i), nous avons ((etage+i) * 2) - 1 étoile
        for(var nb_etoile = 1; nb_etoile <= ((etage + i) * 2) - 1; nb_etoile++){
            document.getElementById('sapin').innerHTML += '*';
        }// Fin des étoiles
        document.getElementById('sapin').innerHTML += '<br>';
    }// Fin des lignes
}// Fin des étages

// On affiche le pied
for(var pied = 1; pied <= taille; pied++){
    document.getElementById('sapin').innerHTML += '|||';
    document.getElementById('sapin').innerHTML += '<br>';
}
