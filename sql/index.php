<?php

    $bdd = new PDO('mysql:host=localhost; dbname=mabase;','root','');

    // Tri par ordre(ORDER BY) alphabétique
    $requete = 'SELECT * FROM jeux_video ORDER BY nom ASC';

    $resultat = $bdd->query($requete);

    // Ecrire une requête qui selectionne tous les jeux de moins de 30
    $requete2 = 'SELECT * FROM jeux_video WHERE prix <= "30"';

     // Ecrire une requête qui selectionne tous les jeux de moins de Michel
    $requete3 = 'SELECT * FROM jeux_video WHERE possesseur = "Michel"';
     // Ecrire une requête qui selectionne tous les jeux de moins de Nes
    $requete4 = 'SELECT * FROM jeux_video WHERE console = "Nes"';
     // Ecrire une requête qui selectionne tous les jeux de moins entre 30 & 50 (Nb : Méthode BETWEEN)
     $requete5 = 'SELECT * FROM jeux_video WHERE prix BETWEEN "30" AND "50"';
     // Ecrire une requête qui selectionne tous les jeux qui rassemble plus de 2 joueurs et moins de 8(NB: Méthode)
     $requete6 = 'SELECT * FROM jeux_video WHERE (nbre_joueurs_max > "2") AND (nbre_joueurs_max < "8")';

      //Ecrire une requête qui fait le total des prix, par possesseur par ordre décroissant de prix (Méthode SUM, GROUP BY)
       $requete7 = 'SELECT possesseur, SUM(prix) AS total FROM jeux_video GROUP BY possesseur';

     $resultat2 = $bdd->query($requete2);
     $resultat3 = $bdd->query($requete3);
    $resultat4 = $bdd->query($requete4);
    $resultat5 = $bdd->query($requete5);
    $resultat6 = $bdd->query($requete6);
    $resultat7 = $bdd->query($requete7);

   

    //  $nom = $_POST['nom'];  
    //  $possesseur = $_POST['possesseur']; 
    //  $console = $_POST['console'];
    //  $prix = $_POST['prix'];
    //  $nbre_joueurs_max = $_POST['nbre_joueurs_max'];
    //  $commentaires = $_POST['commentaires'];


    //  $insertion = 'INSERT INTO jeu_video (nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES ("$nom","$possesseur","$console","$prix","$nbre_joueurs_max","$commentaires")';

     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySQL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Possesseur</th>
                    <th scope="col">Console</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Nb joueurs</th>
                    <th scope="col">Commentaire</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($donnees = $resultat7->fetch()){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $donnees['ID']; ?></th>
                        <td><?php echo $donnees['nom']; ?></td>
                        <td><?php echo $donnees['possesseur']; ?></td>
                        <td><?php echo $donnees['console']; ?></td>
                        <td><?php echo $donnees['total']; ?></td>
                        <td><?php echo $donnees['nbre_joueurs_max']; ?></td>
                        <td><?php echo $donnees['commentaires']; ?></td>
                     </tr>
                    <?php
                    }
                    ?>
                </tbody>
                </table>
            </div>
        </div>
        
        <div class="row">
        <div class="form">
           <form method="POST" action="index.php">
                <div class="form-group">
                    <label for="nom">nom</label>
                    <input type="text" class="form-control" name="nom">
                </div>
                <div class="form-group">
                    <label for="possesseur">possesseur</label>
                    <input type="text" class="form-control" name="possesseur">
                </div>
                <div class="form-group">
                    <label for="console">console</label>
                    <input type="text" class="form-control" name="console">
                </div>
                <div class="form-group">
                    <label for="prix">prix</label>
                    <input type="number" class="form-control" name="prix">
                </div>
                <div class="form-group">
                    <label for="nbre_joueurs_max">nbre_joueurs_max</label>
                    <input type="number" class="form-control" name="nbre_joueurs_max">
                </div>
                <div class="form-group">
                    <label for="commentaires">commentaires</label>
                     <textarea class="form-control" name="commentaires" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>

    </div>

    <a href="/indexexo.php">exo</a>
</body>
</html>


create table voiture (id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, numserie VARCHAR(20), couleur VARCHAR(20), prix INT(5), cout INT(5), marque VARCHAR(100), model VARCHAR(100), nomp VARCHAR(100), prenomp VARCHAR(100));