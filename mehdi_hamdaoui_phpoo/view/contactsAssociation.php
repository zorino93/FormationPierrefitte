<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Association</title>
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
</head>

<body>
    <table class="contacts">
        <thead>
            <tr>
                <th>id_association</th>
                <th>conducteur</th>
                <th>vehicule</th>
                <th colspan="2">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($assoc as $association) :  ?>
                <tr>

                    <td><?php echo htmlentities($association->id_association);  ?></td>

                    
                            <td><?php echo htmlentities($association->id_conducteur);  ?>
                
                            </td>
                            <td><?php echo htmlentities($association->id_vehicule);  ?></td>
                            <td>
                                <a href="association.php?assoc=delete&id=<?php echo $association->id_association; ?>">
                                    delete
                                </a>

                            </td>
                            <td>
                                <a href="association.php?assoc=update&id=<?php echo $association->id_association; ?>">
                                    update
                                </a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <form method="POST" action="">
                <label for="conducteur" class="formu">Conducteur</label><br>
                <select name="conducteur" id="conducteur">
                    <option value="" selected>Choisir le conducteur</option>
                    <option value=""></option>
                </select><br>

                <label for="vehicule" class="formu">Vehicule</label><br>
                <select name="vehicule" id="vehicule">
                    <option value="" selected>Choisir le vehicule </option>
                    <option value=""></option>
                </select><br>

                <input type="submit" value="Ajouter cette Association">
            </form>
        </body>

        </html>