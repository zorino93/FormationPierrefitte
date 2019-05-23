var myUsers = [
    // Objets du tableau(key, value)
    {
        img: "https://cdn.pixabay.com/photo/2016/06/18/17/42/image-1465348_960_720.jpg",
        name: "Marie",
        birthday: "1988-10-12"
    },
    {
        img: "https://images.pexels.com/photos/67636/rose-blue-flower-rose-blooms-67636.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
        name: "Laurent",
        birthday: "1975-01-03"
    },
    {
        img: "https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/_jcr_content/main-pars/image/visual-reverse-image-search-v2_1000x560.jpg",
        name: "Rositta",
        birthday: "1961-03-04"
    },
    {
        img: "https://theadsgroup.com/content/uploads/2012/12/unicorn-wallpaper.jpg",
        name: "Philippine",
        birthday: "1969-01-28"
    }
];



function envoi() {
    // Vérifier que les champs sont remplis.
    if (document.getElementById('prenom').value &&
        document.getElementById('date').value) {

        // Stock les valeurs des champs dans les variables.
        var contenu = document.getElementById('prenom').value;
        var date = document.getElementById('date').value;
        // Ajoute l'élément dans le tableau en dernière position.     
        myUsers.push({ name: contenu, birthday: date });

        console.log(myUsers);

        // Appel de la fonction
        afficherUtilisateurs();


        $("#formghostusers").hide();

    }
    else {
        date.closest('.form-group').addClass('has-error');
        alert("Votre formulaire est mal rempli !!!!")
    }

}

function afficherUtilisateurs() {

    var listUsers = '<div class="row">';
    var defaultImage = "https://demo.phpgang.com/crop-images/demo_files/pool.jpg";
    for (i = 0; i < myUsers.length; i++) {
        // listUsers += '<div class= "col-md-3 mx-auto" style="width: 200px;">' + myUsers[i].name + '<br>' + myUsers[i].birthday + '</div>';

        listUsers += '<div class="card mt-2 ml-2" style="width: 16rem;">';
        listUsers += '<img src= "' + (myUsers[i].img || defaultImage) + '" class="card-img-top" height="200" alt="...">';
        listUsers += '<div class="card-body">';
        listUsers += '<h5 class="card-title">' + myUsers[i].name + '</h5>';
        listUsers += '<p class="card-text">' + myUsers[i].birthday + '</p>';
        listUsers += '<a href="#" class="btn btn-primary">Follow me</a>';
        listUsers += '</div>';
        listUsers += '</div>';

    }
    listUsers += "</div>";
    document.getElementById('list_users').innerHTML = listUsers;
}

afficherUtilisateurs(); // activé la touche entrer du clavier

// activé la touche entrer du clavier
document.addEventListener('keydown', function (event) {
    if (event.keyCode == 13) {
        // afficherUtilisateurs();
        event.preventDefault(); //évite d'envoyer le fomulaire non indiqué.
        envoi();
    }
});



// $(document).ready(function () {
//     $('.users').bind('click', function () {
//         $('#formghostusers').toggleClass('invisible');
//     });
// });

// $(document).ready(function () {
//     $('.users').click(function () {
//         $('#formghostusers').toggle(
//             function () { $('#formghostusers').show(); },
//             function () { $('#formghostusers').hide(); }

//         );
//     });

// });


$(document).ready(function () {
    $('#formghostusers').hide();
    $(".users").click(function () {
        $("#formghostusers").slideToggle();
    });
});


// $(document).ready(function () {
//     $('#formghostusers').hide();
//     $(".users").click(function () {
//         $("#formghostusers").slideToggle();
//     });
// });

$(document).ready(function () {
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#list_users .card").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});