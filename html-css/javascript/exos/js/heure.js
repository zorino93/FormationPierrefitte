var heure = Number(prompt("heure"));
var min = Number(prompt("minute"));
var sec = Number(prompt("seconde"));

// Vérifier la validité de l'heure

if ((heure <= 23) && (heure >= 0) && (min <= 59) && (min >= 0) && (sec <= 59) && (sec >= 0)) {

    // Incrémente les seconde
    sec++;

    if (sec == "60") {
        sec = "00";
        min++;

        if (min == "60") {
            min = "00";
            heure++;

            if (heure == "24") {
                heure = "00";
            }
        }
    }

    alert("Dans une seconde il sera" + ' ' + heure + "h" + min + "m" + sec + "s</h3>");
}
else {
    alert("L'heure entrer est invalide !!")
}