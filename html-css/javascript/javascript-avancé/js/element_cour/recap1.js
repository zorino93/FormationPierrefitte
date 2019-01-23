// declaration avec affectation
// var i = 0; // number
// // ou
// var i = "0"; // string
// var done = false; // booleam
// //affectation à une variable déja initialisée
// i = []; // array
// i = {}; // object

var tabPrenoms = ["Rosita", "Bob", "Gaston", "Laurent"];
// var prenom = tabPrenoms[1];
// var nom = tabPrenoms[2];

// var d = new Date();
// var y = d.getFullYear();
// var m = d.getMonth();
// var dstr = d.toLocaleDateString();

// for (var i = 0; i < tabPrenoms.length; i++) {
//     alert(tabPrenoms[i]);
// }

// var i = 0;
// while (i < tabPrenoms.length) {
//     alert(tabPrenoms[i]);
//     i++;
// }

// Comment vérifier les erreurs

try {
    monApplication();
}
catch (e) {
    console.log(e.stack);
}

// finally{

// }