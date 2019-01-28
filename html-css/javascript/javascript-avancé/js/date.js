

var d = new Date(),
    message = d.toLocaleDateString();

var birthday = prompt('quel est votre date de naissance année-mois-jour');
alert(message + " birthday: " + birthday);

var birthdayDate = new Date(birthday);

if (d.getMonth() === 0) {
    alert("bonne année");
}

if (birthdayDate.getMonth() === d.getMonth() && birthdayDate.getDate() === d.getDate()) {
    alert('bonne anniversaire');

}




var name = prompt('Quel est votre nom ?');
var utilisateurs = [
    ['Pierre', '2009-01-28'],
    ['Marc', '2009-02-09'],
    ['Julie', '2009-04-07'],
    ['François', '2009-03-06']
], p = '';

annivPierre = new Date(utilisateurs[0][1]);
alert(annivPierre);

utilisateurs.push([name, birthday]);


if (birthdayDate.getMonth() === utilisateurs[0][0]) {

}


for (i = 0; i < utilisateurs.length; i++) {
    p += 'Prenom n°' + (i + 1) + ':' + utilisateurs[i] + '\n';

}

alert(p);


var heure = d.getHours();

if (heure <= 7 || heure >= 20) {
    document.body.style.backgroundImage = "url('../javascript-avancé/img/nuit.png')";
    document.body.style.backgroundRepeat = "no-repeat";
    document.body.style.backgroundSize = "cover";
}
else {
    document.body.style.backgroundImage = "url('../javascript-avancé/img/jour.png')";
    document.body.style.backgroundRepeat = "no-repeat";
    document.body.style.backgroundSize = "cover";
}