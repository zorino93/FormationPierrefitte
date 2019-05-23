<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); // chemin vers le dossier du theme actif?>/style.css">
    <?php wp_head(); // Intégre les éléments de xp (css, js, barre d'administration coté front)?>
</head>
<body <?php body_class(); // correspond au nom de la ressource en class css?>>
    <header>
    
    <div class="row">
        <div class="col-6 entete">
            <a href="<?php echo get_site_url(); // url du site dans le backoffice?>">
                    <?php bloginfo('name');?>
            </a>
        </div>
        <div class="col-6 entete">
            <p class="texte-description">
                <?php bloginfo('description'); // description du site dans le backoffice?>
            </p>
        </div>
    </div>    
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <?php wp_nav_menu(array('theme_location' => 'primary')); // Menu principale, wp_nav_menu() permet de récupérer le menu que l'on a déclaré dans le fichier function?>
    
  </div>
</nav>
       
    
    </header>

    <?php get_sidebar('entete'); // appel du fichier sidebar-entete.php?>

        <section>
            <div class="conteneur">

