<?php get_header(); // appel le header.php?>

<?php if( have_posts() ) : while(have_posts() ) : the_post();?>

<!-- 
    have_posts() : permet de savoir si il y a des articles
    the_post() : récupèratiion des articles
 -->

    <h2>
        <a href="<?php the_permalink(); // Le lien du contenu?>">
           <?php the_title(); // afficher le titre?> 
        </a>
    </h2>


    <div class="contenu"><?php the_content(); // afficher le contenu?></div>


    <?php the_field('telephone'); // the_field : permet de récupérer le champs créer avec le pluggin 'ACF'?><br>
    <?php the_field('horaires');?><br>
    <?php the_field('type_de_cuisine');?><br>
    <?php the_field('adresse');?><br>
    <img src="<?php the_field('photo');?>" width="300"><br>

    <hr><hr><hr><hr><hr><hr>
<!-- ====================================================================================== -->

    <?php $telephone = getField('telephone'); // permet de récupérer les infos du champ?>
    <?php $adresse = getField('adresse'); // permet de récupérer les infos du champ?>
    <?php $horaires = getField('horaires'); // permet de récupérer les infos du champ?>
    <?php $type_de_cuisine = getField('type_de_cuisine'); // permet de récupérer les infos du champ?>
    <?php $brunch = getField('brunch'); // permet de récupérer les infos du champ?>
    <?php $photo = getField('photo'); // permet de récupérer les infos du champ?>


    <div class="photo">
        <?php echo $photo->label;?> : <img src="<?php echo $photo->value;?>">
    </div>

    <div class="adresse">
        <?php echo $adresse->label;?> : <?php echo $adresse->value;?>
    </div>

    <div class="telephone">
        <?php echo $telephone->label;?> : <?php echo $telephone->value;?>
    </div>

    <div class="horaires">
        <?php echo $horaires->label;?> : <?php echo $horaires->value;?>
    </div>

    <div class="type_de_cuisine">
        <?php echo $type_de_cuisine->label;?> : <?php echo $type_de_cuisine->value;?>
    </div>

    <div class="brunch">
        <?php echo $brunch->label;?> : <?php echo $brunch->value;?>
    </div>







<?php endwhile; else: // si il n'y a pas de posts, on affiche un msg d'erreur?>

<p>Contenu non trouvé.</p>

<?php endif; ?>

<?php get_footer(); // appel le footer.php?>