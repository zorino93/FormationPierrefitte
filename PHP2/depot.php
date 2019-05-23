<?php
// Reception du nom
$nom=isset($_POST['nom']) ? $_POST['nom'] : '';
 $validextention = array ('pdf', 'doc', 'txt', 'rtf', 'docx');
 $taillelimite = 3145728; // taille de fichier upload 3Mo
 $content = '';

if(!empty($_FILES['cv']['name'])){

        if($_FILES['cv']['size']>$taillelimite){ // récupérer la taille du fichier ne dépassant pas 3Mo
        $content .='Fichier trop lourd.</br>';
        }

        $extension = strrchr($_FILES['cv']['name'],'.');
        $extension = substr($extension,1);

        if(!in_array($extension, $validextention )){
                $content .= 'Extension incorrect !</br>';
        }
        else{
                $content .= 'Extension correct !';
       

        // Ici renommer la photo :
        $nom_du_fichier = $_POST['nom'].''.$_FILES['cv']['name'];

        // Ou est ce qu'on veut stocker notre photo :
        $fichier = $_SERVER['DOCUMENT_ROOT'] . "/FormationPierrefitte/PHP2/lescv/$nom_du_fichier";

        // copy (arg1, arg2) fonction prédéfinies de php où l'arg1 = chemin du fichier source et l'arg2 = chemin de destination
        copy ($_FILES['cv']['tmp_name'], $fichier);

         }

}


// print_r($_FILES);

      

?>

<?php echo $content?>