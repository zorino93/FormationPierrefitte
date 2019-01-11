var ii = Number(prompt("saisir un nombre"))

for (var i = 1; i <= ii; i++) {
    if (i % 2 === 0) {
        console.log(i + " est pair<br>");
    }
    else if (i % 2 === 1) {
        console.log(i + " est impair<br>");
    }
}