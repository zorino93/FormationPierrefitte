 <?php require_once('../PHP2/inc/header.inc.php');?>

    <form action="../PHP2/admin/admin.php" method="post">
    <label for="email">email</label><br>
    <input type="text" name="email" id="email" ><br>
    <label for="mdp">mot de passe</label><br>
    <input type="text" name="mdp" id="mdp"><br><br>
    
    <input type="submit">
    </form>

   <p>Votre adresse IP :<?php echo $_SERVER['REMOTE_ADDR'];?></p>
   
<?php require_once('../PHP2/inc/footer.inc.php');?>