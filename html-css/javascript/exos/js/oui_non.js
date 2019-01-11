
var reponse = "",
    i = 0;

while ((reponse !== "oui") && (reponse !== "non")) {
    reponse = prompt("Quel sont les reponse à ne pas donner ?");

    document.write(reponse + "pour la" + i + "");

    i++;
}

document.write("<h1 style = 'background : cyan ; text aling; center'> Vous avez perdu</h1>");