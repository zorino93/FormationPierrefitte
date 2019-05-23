var myCars = [
    // Objets du tableau(key, value)
    {
        img: "https://wf3.fr/evaluations/2018/html-css-js-finale/vehicule1.png",
        name: "Peugeot 208",
    },
    {
        img: "https://wf3.fr/evaluations/2018/html-css-js-finale/vehicule2.png",
        name: "Ford Focus",
    },
    {
        img: "https://wf3.fr/evaluations/2018/html-css-js-finale/vehicule3.png",
        name: "Audi A1",
    },
    {
        img: "https://wf3.fr/evaluations/2018/html-css-js-finale/vehicule4.png",
        name: "Opel Mokka",
    }
];

// Permet de créé une boucle avec '$.each()' pour afficher tout les utilisateurs dans une cartes.
function afficherCards() {

    var listCars = '<div class="row cars">';
    var i = 0;
    // var b = 1;
    // var c = 2;
    // var d = 3;
    // for (i = 0; i < myUsers.length; i++) {

    $.each(myCars, function () {

        // listUsers += '<div class= "col-md-3 mx-auto" style="width: 200px;">' + myUsers[i].name + '<br>' + myUsers[i].birthday + '</div>';

        listCars += '<div id="user-cars" class="col-6 ">';
        listCars += '<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">';
        listCars += ' <div class="carousel-inner">';
        listCars += '<div class="carousel-item active">';
        listCars += '<img src="' + myCars[i].img + '" class="d-block w-100" alt="...">';
        listCars += ' </div>';
        listCars += '<div class="carousel-item">';
        listCars += ' <img src="' + myCars[i].img + '" class="d-block w-100" alt="...">';
        listCars += '</div>';
        listCars += '<div class="carousel-item">';
        listCars += ' <img src="' + myCars[i].img + '" class="d-block w-100" alt="...">';
        listCars += '</div>';
        listCars += '<div class="carousel-item">';
        listCars += '<img src="' + myCars[i].img + '" class="d-block w-100" alt="...">';
        listCars += '</div>';
        listCars += '</div>';
        listCars += '</div>';
        listCars += '</div>';

        listCars += '<div id="user-cars" class="col-6 mt-5">';
        listCars += '<h2>' + myCars[i].name + '</h2>';
        listCars += ' <p>Disiel, 5 portes, GPS, Autoradio, Forfait 1000 km (0,5/km supplémentaire).</p>';
        listCars += ' <p>1150€ - Agence de Paris</p>';
        listCars += ' <button class="btn btn-outline-reservation bg-success text-white " type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Réservation et Payer</button>';
        listCars += '</div>';

        i++;
    });

    // } // fin boucle for
    listCars += "</div>";
    // document.getElementById('list_users').innerHTML = listUsers;
    $('#list_cars').html(listCars);
    // $(".card2").slideDown(2000);
    // $(".card").fadeIn(3000);


    // AFFICHAGE PROGRESSIF DES CARTES utilisateurs

    var userCars = $('#list_cars .cars');
    // userCards.css('display', 'none'); diparition de la carte sans passer par le css.
    var time = 500;
    var $i = 0;
    userCars.each(function () {
        var selectedUserCard = "#user-cars" + $i;
        selectedUserCard = $(selectedUserCard);
        setTimeout(function () { selectedUserCard.fadeIn(500); }, time);
        time += 500;
        $i++
    });

}


$(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() == $(document).height() - $(window).height()) {
            if (myCars.length < 8) { // taille du tableau apres le merge (pour le faire 1 fois seulement)
                // alert('chargement du 2e tableau d\'utilisateurs');
                $('#list_cars').append('<img src="https://upload.wikimedia.org/wikipedia/commons/c/c7/Loading_2.gif" alt="...">');
                afficherCards()
                setTimeout(function () {
                }, 3000);

            }
        }
    });
});