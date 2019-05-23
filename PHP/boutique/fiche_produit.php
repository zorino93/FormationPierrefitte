<?php require_once('inc/header.inc.php');?>

<?php

if(isset($_GET['id_article'])){// si il y a une id_article dans l'URL

    $r = execute_requete("SELECT * FROM article WHERE id_article='$_GET[id_article]'");

}
else{// sinon, redirection

    header('location:index.php');
    exit();
}

$article = $r->fetch(PDO::FETCH_ASSOC);
 //debug($article);
?>
<a href='index.php'>Retour vers la boutique</a><br>
<a href='index.php?categorie=$article[categorie]'>Retour vers la categorie <?php echo $article['categorie']?></a>

<h1><?php echo $article['titre'] ?></h1>

<p>Catégorie: <?php echo $article['categorie'] ?></p>
<p>Couleur: <?php echo $article['couleur'] ?></p>
<p>Taille : <?php echo $article['taille'] ?></p>

<p><img src='<?php echo $article['photo'] ?>' width='200'></p>

<p>Description:</p>
<p><?php echo $article['description'] ?></p>
<p>Prix: <?php echo $article['prix'] ?></p>


<?php  if ($article['stock'] > 0) { // si le stock est supérieur à 0 ?>
    
    Nombre de produit disponible :  <?php echo $article['stock'] ?><br>
    <form method="post" action="panier.php">

        <input type="hidden" name="id_article" value="<?php echo $article['id_article'] ?>"><br>

        <label>Quantité</label><br>
        <select name="quantite" id="qte">
                <?php for ($i=1; $i <= $article['stock'] ; $i++) { ?>
                   <option><?php echo $i ?></option>
               <?php } ?>

        </select><br><br>

        <input type="submit" name="ajout_panier" value="Ajouter au panier" class="btn btn-secondary">

    </form>
<?php } 
else{//Sinon on indique rupture de stock ?>
    <p>Rupture de stock !</p>
 <?php } ?>

<?php require_once('inc/footer.inc.php');?>