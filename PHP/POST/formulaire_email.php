<?php

// var_dump($_POST);

if($_POST){

    echo "Destinataire : $_POST[destinataire] <br>";
    echo "Expediteur : $_POST[expediteur] <br>";
    echo "Sujet : $_POST[sujet] <br>";
    echo "Message : $_POST[message] <br>";

    mail ($_POST['destinataire'],$_POST['expediteur'], $_POST['sujet'], $_POST['message'] );

    // la fonction mail() reçoits 4 paramètres, où l'ordre est crucial !!!
    // mail (adresseDestinataire@ok.fr, sujet, message, adresseExpediteur@ok.fr)
}

?>

<form method="post" action="">
    <div>
        <label for="destinataire">Destinataire</label><br>
        <input type="text" id="destinataire" name="destinataire"><br>
    </div>

    <div>
        <label for="expediteur">Expediteur</label><br>
        <input type="text" id="expediteur" name="expediteur"><br>
    </div>

    <div>
        <label for="sujet">Sujet</label><br>
        <input type="text" id="sujet" name="sujet"><br>
    </div>

    <div>
        <label for="message">Message</label><br>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </div>

    <input type="submit">

   </form>