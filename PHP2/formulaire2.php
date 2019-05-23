<?php require_once('../PHP2/inc/header.inc.php');?>

    <form action="../PHP2/admin/admin2.php" method="post">
    <label for="email">email</label><br>
    <input type="text" name="mail" id="mail" ><br>
    <label for="mdp">mot de passe</label><br>
    <input type="text" name="mdp" id="mdp"><br><br>
    
    <input type="submit">

    <p>La langue indiquer par le navigateur est :<?php echo substr( $_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);?></p>
    </form>
<?php require_once('../PHP2/inc/footer.inc.php');?>