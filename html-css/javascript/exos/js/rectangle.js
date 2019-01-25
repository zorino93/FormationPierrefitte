'use strict';   // Mode strict du JavaScript
// alert('test');

/***********************************************
 ***************** 1- VARIABLES *****************
 ***********************************************/

// Recherche du bouton dans l'arbre DOM.
var bouton = document.getElementById('toggle-rectangle');

// Recherche du rectangle dans l'arbre DOM.
var rectangle = document.querySelector('.rectangle');

/***********************************************
 ***************** 2- FONCTIONS *****************
 ***********************************************/

/*
1- fonction au click sur le bouton
*/
// La méthode .toggle() va ajouter ou supprimer la class CSS (tel un interrupteur).
function surClicBouton() {
    rectangle.classList.toggle('hide');
}

/*
2. fonction au double-click sur le rectangle
*/
function auDoubleClicRectangle() {
    rectangle.classList.toggle('good');
}

/*
3. A l'entrée du survol du rectangle
*/
// La méthode .add() va ajouter la class CSS.
function auSurvolSourisRectangle() {
    rectangle.classList.add('important');
}

/*
4. A la sortie du survol du rectangle
*/
// La méthode .remove() va ajouter la class CSS.
function aSortieSourisRectangle() {
    rectangle.classList.remove('good');
    rectangle.classList.remove('important');
}

/***********************************************
 *********** 3- ECOUTEUR D'EVENEMENT ************
 ************************************************
 ********** 1er paramètre: l'évènement **********
 **** 2nd paramètre: la fonction à exécuter *****
 ***********************************************/

/*
1. Installation d'un gestionnaire d'évènement au clic sur le bouton.
*/
bouton.addEventListener('click', surClicBouton);

/*
2. Installation d'un gestionnaire d'évènement au double clic sur le rectangle.
*/
rectangle.addEventListener('dblclick', auDoubleClicRectangle);

/*
3. Installation d'un gestionnaire d'évènement au survol sur le rectangle.
*/
rectangle.addEventListener('mouseover', auSurvolSourisRectangle);

/*
4. Installation d'un gestionnaire d'évènement à la sortie du survol sur le rectangle.
*/
rectangle.addEventListener('mouseout', aSortieSourisRectangle);