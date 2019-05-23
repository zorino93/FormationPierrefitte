<?php

//Créer une page lien.php. Prévoir 4 liens avec le nom des fruits afin de faire en sorte que lorsque l'on clique dessus, le prix du fruit (pour 1kg !) s'affiche dans la MEME PAGE !

include('fonction.inc.php'); 

if($_GET){
 echo calcul( $_GET['fruit'] , 1000);
 }

?> 

<hr>
<a href="?fruit=pommes">Pommes</a>
<a href="?fruit=bananes">Bananes</a>
<a href="?fruit=cerises">Cerises</a>
<a href="?fruit=peches">Pêches</a>
