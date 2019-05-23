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

<?php endwhile; else: ?>

<p>Contenu non trouvé.</p>

<?php endif; ?>
<?php get_footer(); // appel le footer.php?>