function afficheAge(nom, annee) {
    var age;
    age = 2019 - annee;
    console.log(nom + " " + "a" + " " + age + "an(s)");
    return age;
}

afficheAge("Bob", 2000);
afficheAge("Rositta", 1980);

var age1, age2;
age1 = afficheAge("karim", 2015);
age2 = afficheAge("Mélanie", 1978);
alert(age1 + " " + age2);