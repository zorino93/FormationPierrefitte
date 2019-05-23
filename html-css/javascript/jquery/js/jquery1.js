// $(document).ready(function () {
//     $('.maDivSelect').addClass('highlighted');
// });

$(document).ready(function () {
    $('#selected-div > li').addClass('horizontal');
    // selectionne uniquement les enfants directs de l'élément.

    $('#selected-div li:not(.horizontal)').addClass('sub-level');
    // Ajoute moi a tout les "li" la classe horizontal.

    $('#selected-div .sub-level:nth-child(odd)').addClass('alt');
});



//liens

// $(document).ready(function () {
//     $('a[href^=http] [href*=mehdi]').addClass('perso');
// });



// ligne paire et impaire 

$(document).ready(function () {
    $('tr:nth-child(even)').addClass('alt'); // cherche l'élément paire de l'enfant  et "odd" l'élément impaire de l'enfant
    $('td:contains(mehdi)').addClass('highlithed'); // contenant l'élément ex(mehdi)
});