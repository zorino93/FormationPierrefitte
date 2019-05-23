<?php
//EXERCICE 

/*créer un fichier fonction.php : et créer une fonction calcul($fruit, $poids) qui va recevoir 2 arguments (fruit , poids)et qui va retourner une phrase :
    "Les .... coutent .... € pour un poids de .... grammes"*/
    
function calcul($fruit, $poids){



        switch($fruit){

            case 'cerises' : 
                $prix_kg = 5;
            break;
             case 'pommes' : 
                $prix_kg = 1.5;
            break;
             case 'bananes' : 
                $prix_kg = 2;
            break;
             case 'peches' : 
                $prix_kg = 3.5;
            break;

            default : 
                return 'Fruit inexistant';
            break;
        }

        $resultat = round(($poids*$prix_kg/1000),2); // round((),2) arrondir nombre à virgule.

        return "Les $fruit coutent $resultat € pour un poids de $poids ";

    }
    
// echo calcul( 'pommes', 123 );





?>