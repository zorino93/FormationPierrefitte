var d = new Date();// Créé variable d qui stocke une nouvelle date
var message = "Bienvenue ! ";
var userName = prompt("Quel est votre prénom ?");// Stock le prénom saisi par l'utilisateur
var userBirthday = prompt("Quand êtes vous né ? ( ATTENTION Format AAAA-MM-JJ )"); // Stock la date saisi par l'utilisateur
var userBirthdayDate = new Date(userBirthday);// Créé une variable qui stocke une nouvelle date avec pour valeur la date stockée de l'utilisateur

// Créé un tableau
var myUsers = [
  // Objets du tableau(key, value)
  { name: "Marie", birthday: "1988-10-12" },
  { name: "Laurent", birthday: "1975-01-03" },
  { name: "Rositta", birthday: "1961-03-04" },
  { name: "Philippine", birthday: "1969-01-28" }
];

// Ajoute un objet dans le tableau
myUsers.push({ name: userName, birthday: userBirthday });

// Stocke l'âge de l'utilisateur
var userAge = d.getYear() - userBirthdayDate.getYear();

message += "Nous sommes le ";
message = message + d.toLocaleDateString() + ". Vous êtes né le " + userBirthdayDate.toLocaleDateString();// Converti la date au format locale
message += ". Vous avez " + userAge + "ans.";

// Vérifie si on est en janvier
if (d.getMonth() == 0) {
  message += " Bonne année";
  // alert("Bonne année !")
}

if (d.getMonth() == userBirthdayDate.getMonth() && d.getDate() == userBirthdayDate.getDate()) {
  message += " Bon anniversaire " + userName;
}

// Ajoute le message dans la page
document.getElementById('Idannee').innerText = message;
// alert(myUsers[0].name);


var message2 = "C'est l'anniversaire de : ";

// Boucle dans le tableau
for (i = 0; i < myUsers.length; i++) {
  // Vérifie que le mois et le jour entré par l'utilisateur sont identique au jour et au mois courant
  if (d.getMonth() == new Date(myUsers[i].birthday).getMonth() && d.getDate() == new Date(myUsers[i].birthday).getDate()) {
    // Calcul l'âge
    age = d.getYear() - new Date(myUsers[i].birthday).getYear();
    message2 += myUsers[i].name + ", âge : " + age + "<br>";
    // Affiche le message
    document.getElementById('liste_users').innerHTML = message2;
  }
};

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