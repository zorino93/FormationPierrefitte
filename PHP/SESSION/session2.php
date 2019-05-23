<?php

session_start(); // Lorsque j'effectue une session_start, la session n'est pas recréée car elle existe déjà (grâce au session_start() dans session1.php)

var_dump($_SESSION); // affichage des infos contenues dans session

// Ce fichier n'a rien à voir avec la session1.php, il n'y a pas d'inclusion, il pourrait se trouver dans un autre dossier, s'appeler n'importe comment, les informations contenues seraient quand même accessibles. C'est l'intêret et la 'puissance' des sessions.


?>