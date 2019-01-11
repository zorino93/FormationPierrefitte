var jour = prompt("Ecrivez un nom de jour ?");

if (jour === "lundi") {
    console.log("jour suivant mardi");
} else if (jour === "mardi") {
    console.log("jour suivant mercredi");
} else if (jour === "mercredi") {
    console.log("jour suivant jeudi");
} else if (jour === "jeudi") {
    console.log("jour suivant vendredi");
} else if (jour === "vendredi") {
    console.log("jour suivant samedi");
} else if (jour === "samedi") {
    console.log("jour suivant dimanche");
} else {
    console.log("jour incorrect");
}

switch (jour) {
    case "lundi":
        console.log("jour suivant mardi");
        break;
    case "mardi":
        console.log("jour suivant mercredi");
        break;
    case "mercredi":
        console.log("jour suivant jeudi");
        break;
    case "jeudi":
        console.log("jour suivant vendredi");
        break;
    case "vendredi":
        console.log("jour suivant samedi");
        break;
    case "samedi":
        console.log("jour suivant dimanche");
        break;
    default:
        console.log("jour incorrect");
}