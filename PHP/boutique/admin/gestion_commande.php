<?php require_once('../inc/header.inc.php')?>

<?php
//---------------------------------------------------------------------//
// Gérer la redirection si pas admin

if(!adminConnect()){ // si l'admin n'est pas connecté, on le redirige vers la page connexion

    header('location:../connexion.php');
    exit();

}


//--------------------------------------------------------------------------------------------------//
// Affichage des commandes (sous forme de tableau) : afficher id_commande, id_membre, montant, date, etat, pseudo, adresse, ville, cp
    //L'id_commande doit être cliquable (lien a) pour voir le detail de la commande

     $r = execute_requete("SELECT c.id_commande, m.id_membre, c.montant, c.date, c.etat, m.pseudo, m.adresse, m.ville, m.cp 
                           FROM commande c, membre m WHERE c.id_membre = m.id_membre");

    $content .= '<h1>Listing des commandes</h1>';
      $content .= "Nombre de commande(s):".$r->rowCount().'<br><br>';
    $content .= '<table border="1" colspan="4" cellpadding="5">';
        $content .= '<tr>';

             for($i=0; $i<$r->columnCount();$i++){
            
            $colonne = $r->getColumnMeta($i);

            $content .="<th>$colonne[name]</th>";
        }

        $content .= '</tr>';

        $chiffre_affaire = 0;

        while($ligne = $r->fetch(PDO::FETCH_ASSOC)){

            $content .=' <tr>';

            $chiffre_affaire += $ligne['montant'];

                foreach ($ligne as $key => $value) {

                    
                    if($key == 'id_commande'){
                        $content .= '<td><a href="?action='.$ligne['id_commande'].'">'.$ligne['id_commande'].'</a></td>';
                    }
                   
                    else{
                        $content .= "<td>$value</td>";
                    
                        }
                }
            $content .= '</tr>';

            }

    $content .= '</table>';
    
    $content .= "CA de la boutique:"." ".$chiffre_affaire;

//--------------------------------------------------------------------------------------------------//
// Affichage suivi commande si il on a cliqué sur l'id_commande (sous forme de tableau)

if (isset($_GET['action'])) {

    $content .= '<h1>Voici le details de la commande '.$_GET['action'].'</h1>';
   
    $r = execute_requete("SELECT * FROM details_commande WHERE id_commande = $_GET[action]");

     $content .= '<br><table border="1" colspan="4" cellpadding="5" style="border-color:red;">';
        
        $content .= '<tr>';
        
            for($i=0; $i<$r->columnCount();$i++){
            
            $colonne = $r->getColumnMeta($i);

            $content .="<th>$colonne[name]</th>";
        }

        $content .= '</tr>';

        while($ligne = $r->fetch(PDO::FETCH_ASSOC)){

            $content .=' <tr>';

                foreach ($ligne as $key => $value) {

                    
                        $content .= "<td>$value</td>";
                    
                }

            $content .= '</tr>';

        }

    $content .= '</table>';
}

?>
<?= $content ?>

<?php require_once('../inc/footer.inc.php')?>