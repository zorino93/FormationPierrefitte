var jour = Number(prompt("nombre de mois"));


if (jour == 2) {
    alert("ce mois contient 28 jours");
} else if ((jour === 1) || (jour === 3) || (jour === 5) || (jour === 7) || (jour === 8) || (jour === 10) || (jour === 12)) {
    alert("ce mois contient 31 jours");
}
else if ((jour === 4) || (jour === 6) || (jour === 9) || (jour === 11)) {
    alert("ce mois contient 30 jours");
}
else {
    alert("ce mois n'existe pas");
}

//  if (jour == 1) {
//      alert(31 + ' jour ');
//      location.reload();
//  } else if (jour == 2) {
//      alert(28 + ' jour ');
//      location.reload();
//  } else if (jour == 3) {
//      alert(31 + ' jour ');
//      location.reload();
//  } else if (jour == 4) {
//      alert(30 + ' jour ');
//      location.reload();
//  } else if (jour == 5) {
//      alert(31 + ' jour ');
//      location.reload();
//  } else if (jour == 6) {
//      alert(30 + ' jour ');
//      location.reload();
//  } else if (jour == 7) {
//      alert(31 + ' jour ');
//      location.reload();
//  } else if (jour == 8) {
//      alert(31 + ' jour ');
//      location.reload();
//  } else if (jour == 9) {
//      alert(30 + ' jour ');
//      location.reload();
//  } else if (jour == 10) {
//      alert(31 + ' jour ');
//      location.reload();
//  } else if (jour == 11) {
//      alert(30 + ' jour ');
//      location.reload();
//  } else if (jour == 12) {
//      alert(31 + ' jour ');
//      location.reload();
//  } else {
//      alert("jour incorrect");
//      location.reload();
//  }


