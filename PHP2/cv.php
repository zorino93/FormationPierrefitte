<?php require_once('../PHP2/inc/header.inc.php');?>

    <form action="depot.php" method="post" enctype="multipart/form-data">
    <label for="nom">Nom</label><br>
    <input type="text" name="nom" id="nom" ><br>
    <label for="cv">votre cv</label><br>
    <input type="file" name="cv" id="cv"><br><br>
    <input type="submit" value="Télécharger">

<?php require_once('../PHP2/inc/footer.inc.php');?>