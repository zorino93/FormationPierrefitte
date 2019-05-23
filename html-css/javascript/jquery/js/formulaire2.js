
/************* JAVASCRIPT *****************/


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
    },
    {
        img: "https://image.freepik.com/vecteurs-libre/conception-abstraite-ornement-colore_23-2147501644.jpg",
        name: "Karim",
        birthday: "1995-04-25"
    },
    {
        img: "https://image.freepik.com/vecteurs-libre/illustration-du-mandala_53876-78824.jpg",
        name: "Linda",
        birthday: "1985-05-16"
    },
    {
        img: "https://image.freepik.com/vecteurs-libre/oiseaux-dans-nature_53876-80628.jpg",
        name: "Clark",
        birthday: "1984-06-06"
    },
    {
        img: "https://image.freepik.com/psd-gratuit/abstrait-entreprise-bleu-figures-geometriques_24972-215.jpg",
        name: "karen",
        birthday: "1994-08-12"
    },
    {
        img: "https://image.freepik.com/vecteurs-libre/ensemble-conception-fond-abstrait-colore_53876-58373.jpg",
        name: "Gérard",
        birthday: "1965-05-19"
    },
    {
        img: "https://image.freepik.com/vecteurs-libre/vecteur-conception-coeurs-points-colores_53876-81576.jpg",
        name: "hilary",
        birthday: "1990-09-10"
    },
    {
        img: "https://image.freepik.com/vecteurs-libre/conception-fond-abstrait-points-demi-teinte_1017-11526.jpg",
        name: "Jafard",
        birthday: "1968-11-27"
    },
    {
        img: "https://image.freepik.com/vecteurs-libre/belle-conception-collection-banniere-moderne-cassee_1035-15136.jpg",
        name: "Rudolf",
        birthday: "2000-06-13"
    },
    {
        img: "https://image.freepik.com/vecteurs-libre/beau-design-fond-bonne-annee-2019_1055-5875.jpg",
        name: "Piratipe",
        birthday: "1962-04-22"
    },
    {
        img: "https://image.freepik.com/vecteurs-libre/gris-carre-motif-fond-illustration-vectorielle_1164-1350.jpg",
        name: "Romie",
        birthday: "1956-08-15"
    },
    {
        img: "https://image.freepik.com/vecteurs-libre/design-fond-elegant-2019-sombre_1017-16377.jpg",
        name: "Jean-claude",
        birthday: "2005-12-30"
    },
    {
        img: "https://image.freepik.com/photos-gratuite/belle-fumee-abstraite-fond-noir-conception-feu_55716-1105.jpg",
        name: "Richard",
        birthday: "1988-11-30"
    }

];

var myUsers2 = [
    {
        'img': "https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2F1.bp.blogspot.com%2F-ZQ72arN6Cww%2FVYwYGuHvIvI%2FAAAAAAAA5sU%2FODig-qk58ew%2Fs1600%2Fgabby-character-art.png",
        'name': "Juliette",
        'birthday': "1981-10-11"
    },
    {
        'img': "https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2F2.bp.blogspot.com%2F-5mRilOpRy0I%2FVJy6GQtKHPI%2FAAAAAAAAqgI%2Fgf9IjNNWct4%2Fs1600%2F20140619132911_pablo__1__by_kaylor2013-d8ajjmn.png",
        'name': "Jamel",
        'birthday': "1973-02-06"
    },
    {
        'img': "https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2F1.bp.blogspot.com%2F-nsswLeomtas%2FVPmvY91wJ8I%2FAAAAAAAAyBc%2Fi0HeUWxi2B0%2Fs1600%2Fcharacterart-ducktales-540b351b98bbf.png",
        'name': "Paul",
        'birthday': "1961-02-07"
    },
    {
        'img': "https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2F2.bp.blogspot.com%2F-AdUypBrvdDw%2FVYwRWktSfmI%2FAAAAAAAA5E8%2F2-5ZOLMGnwk%2Fs1600%2Fcandacepoint.png",
        'name': "Maryline",
        'birthday': "1969-02-08"
    },
    {
        'img': "https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2F1.bp.blogspot.com%2F-9xdiTy7IjQk%2FWBL4dO7VSvI%2FAAAAAAABCUw%2FNfhpqM8IWQs1OlLV1AIFvEaJ4LdnrpNVgCPcB%2Fs1600%2FZingzillas_zak.png",
        'name': "José",
        'birthday': "1961-02-09"
    },
    {
        'img': "https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fimg-new.cgtrader.com%2Fitems%2F49561%2Fdinosaur_cartoon_character_3d_model_3ds_fbx_c4d_dxf_lwo_lw_lws_ma_mb_obj_hrc_xsi_max_0d3762e0-4dd9-4a54-921a-b8a3727d02ed.jpg",
        'name': "Christian",
        'birthday': "1961-02-10"
    },
    {
        'img': "https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2F3.bp.blogspot.com%2F--B1o1aR9bMs%2FVhnCEKOBZHI%2FAAAAAAAA-U8%2FU2gAIpoIEOg%2Fs1600%2Fchar_pip.png",
        'name': "Ali",
        'birthday': "1961-02-11"
    },
    {
        'img': "https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2F2.bp.blogspot.com%2F-GRGZt1CRaJ4%2FUvh8q4j7IQI%2FAAAAAAAAZjc%2FtVUkrZi1H6Q%2Fs1600%2FJACKIE_05C.jpg",
        'name': "Pepita",
        'birthday': "1961-02-12"
    },
    {
        'img': "https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2F3.bp.blogspot.com%2F-myyVqOupnX8%2FWh8SHSOaNaI%2FAAAAAAABNUo%2FsT09777VCBEgG57HOVejHUZgqyQDiam4ACKgBGAs%2Fs1600%2FCirque-Du-Soleil-Luna-Petunia-SABAN-616.png",
        'name': "Aline",
        'birthday': "1961-02-13"
    },
    {
        'img': "https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fthumbs.dreamstime.com%2Fz%2Fwalking-butterfly-cartoon-character-d-rendered-illustration-69238085.jpg",
        'name': "Marcelle",
        'birthday': "1941-02-14"
    },
    {
        'img': "https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2F736x%2F35%2F37%2F47%2F353747482e8b8a7e072609548a85398a--hanna-barbera-cartoons-secret-squirrel.jpg",
        'name': "Josh",
        'birthday': "1971-02-15"
    },
    {
        'img': "https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2F4.bp.blogspot.com%2F-Ua-2EP5iNPI%2FU84WftNQd7I%2FAAAAAAAAghI%2F717a28yB9XQ%2Fs1600%2FDoramichan.png",
        'name': "Ana",
        'birthday': "1964-02-16"
    },
    {
        'img': "https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.9PAer7su1OTkRLu8dKrpagHaJS%26pid%3D15.1&f=1",
        'name': "Mounia",
        'birthday': "1969-02-17"
    },
    {
        'img': "https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2F1.bp.blogspot.com%2F-5PfgYCz5xdI%2FU3mtwIj0JJI%2FAAAAAAAAfxs%2FQSMH0O3ntG8%2Fs1600%2F13.png",
        'name': "Nikita",
        'birthday': "1961-02-18"
    },
    {
        'img': "https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2F3.bp.blogspot.com%2F-myyVqOupnX8%2FWh8SHSOaNaI%2FAAAAAAABNUo%2FsT09777VCBEgG57HOVejHUZgqyQDiam4ACKgBGAs%2Fs1600%2FCirque-Du-Soleil-Luna-Petunia-SABAN-616.png",
        'name': "Maria",
        'birthday': "1961-02-19"
    },
    {
        'img': "https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2F2.bp.blogspot.com%2F-95s2I3alL6E%2FV3SMQgA9P_I%2FAAAAAAABAy0%2FKBu3-cA8dt4MHwZi5SfnjbRJMWKfMVFZQCKgB%2Fs1600%2Fguga_azul.png",
        'name': "Joel",
        'birthday': "1961-02-20"
    }
];


// paramètre de la fonction envoi() pour l'affichage du tableau
function envoi() {
    // Vérifier que les champs sont remplis.
    if (document.getElementById('prenom').value &&
        document.getElementById('date').value) {

        // Stock les valeurs des champs dans les variables.
        var contenu = document.getElementById('prenom').value;
        var date = document.getElementById('date').value;
        // Ajoute l'élément dans le tableau en 1er position.     
        myUsers.unshift({ name: contenu, birthday: date });

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



// permet d'afficher le tableau en cliquant sur la touche envoi
$('#cliquer').bind('click', function () {
    envoi();
});


// Permet de créé une boucle avec '$.each()' pour afficher tout les utilisateurs dans une cartes.
function afficherUtilisateurs() {

    var listUsers = '<div class="row card1">';
    var defaultImage = "https://demo.phpgang.com/crop-images/demo_files/pool.jpg";
    var i = 0;
    // for (i = 0; i < myUsers.length; i++) {

    $.each(myUsers, function () {

        // listUsers += '<div class= "col-md-3 mx-auto" style="width: 200px;">' + myUsers[i].name + '<br>' + myUsers[i].birthday + '</div>';

        listUsers += '<div id="user-card' + i + '" class="card mt-2 ml-2 card2 bg-danger" style="width: 16rem;">';
        listUsers += '<img src= "' + (myUsers[i].img || defaultImage) + '" class="card-img-top" height="200" alt="...">';
        listUsers += '<div class="card-body">';
        listUsers += '<h5 class="card-title text-center mr-4 text-white">' + myUsers[i].name + '</h5>';
        listUsers += '<p class="card-text text-center mr-4 text-white">' + myUsers[i].birthday + '</p>';
        listUsers += '<a href="#" class="btn btn-primary ml-5">Follow me</a>';
        listUsers += '</div>';
        listUsers += '</div>';
        i++;
    });

    // } // fin boucle for
    listUsers += "</div>";
    // document.getElementById('list_users').innerHTML = listUsers;
    $('#list_users').html(listUsers);
    // $(".card2").slideDown(2000);
    // $(".card").fadeIn(3000);


    // AFFICHAGE PROGRESSIF DES CARTES utilisateurs

    var userCards = $('#list_users .card');
    // userCards.css('display', 'none'); diparition de la carte sans passer par le css.
    var time = 500;
    var $i = 0;
    userCards.each(function () {
        var selectedUserCard = "#user-card" + $i;
        selectedUserCard = $(selectedUserCard);
        setTimeout(function () { selectedUserCard.fadeIn(500); }, time);
        time += 500;
        $i++
    });

}


afficherUtilisateurs();



// activé la touche entrer du clavier
// document.addEventListener('keydown', function (event) {
//     if (event.keyCode == 13) {
//         // afficherUtilisateurs();
//         event.preventDefault(); //évite d'envoyer le fomulaire non indiqué.
//         envoi();
//     }
// });


// activé la touche entrer du clavier
$("#formghostusers input").keyup(function (event) {
    if (event.keyCode == 13) {
        // afficherUtilisateurs();
        // event.preventDefault(); //évite d'envoyer le fomulaire non indiqué.
        envoi();
    }
});


//************ JQUERY ***************/



// Stopper l'évènement

/**
 * Option1:
 * stopPropagation();
 * 
 * option2:
 * preventDefault();
 * 
 * option3:
 * mix des 2:
 * retrun false;
 */



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

// l'effet slide sur le formulaire au clique du bouton afficher utilisateur
$(document).ready(function () {
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



// filtre le tableau en cherchant sur la recherche un nom

$(document).ready(function () {
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#list_users .card").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});


// $(document).ready(function () {
//     $('#formghostusers').hide();
//     $(function () {
//         var div = $(".card");
//         div.animate({ left: '50px' }, "slow");
//     });
// });


// $(function () {
//     $("#div1").fadeIn();
//     $("#div2").fadeIn("slow");
//     $("#div3").fadeIn(3000);
// });


// $(window).scroll(function () {
//     // cette condition vaut true lorsque le visiteur atteint le bas de page
//     // si c'est un iDevice, l'évènement est déclenché 150px avant le bas de page
//     if (($(window).scrollTop() + $(window).height()) == $(document).height() || ($(window).scrollTop() + $(window).height()) > $(document).height()) {
//         // on effectue nos traitements
//         if (myUsers.length < 32) {
//             $.getJson('json')
//             myUsers = $.merge(myUsers, myUsers2);
//             alert('bas de page !!');
//         } else {

//         }
//     }
// });



// load appelé sur scroll

$(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() == $(document).height() - $(window).height()) {
            if (myUsers.length < 32) { // taille du tableau apres le merge (pour le faire 1 fois seulement)
                // alert('chargement du 2e tableau d\'utilisateurs');
                $('#list_users').append('<img src="https://upload.wikimedia.org/wikipedia/commons/c/c7/Loading_2.gif" alt="...">');
                myUsers = $.merge(myUsers, myUsers2);
                setTimeout(function () {
                    afficherUtilisateurs();
                }, 3000);

            }
        }
    });
});

