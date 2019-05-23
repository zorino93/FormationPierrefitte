

var myUsers = [
    // Objets du tableau(key, value)
    { name: "Marie", birthday: "1988-10-12" },
    { name: "Laurent", birthday: "1975-01-03" },
    { name: "Rositta", birthday: "1961-03-04" },
    { name: "Philippine", birthday: "1969-01-28" }
];



function bouton() {
    var userName = prompt("Quel est votre prénom ?");// Stock le prénom saisi par l'utilisateur
    var userBirthday = prompt("Quand êtes vous né ? ( ATTENTION Format AAAA-MM-JJ )"); // Stock la date saisi par l'utilisateur
    myUsers.push({ name: userName, birthday: userBirthday });
    console.log(myUsers);
}