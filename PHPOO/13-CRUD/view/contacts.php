<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
    <div>
    <a href="index.php?op=new">Ajouter un nouvel employe</a>
    </div>
    <table class="contacts">
        <thead>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Sexe</th>
                <th>Service</th>
                <th>Date d'embauche</th>
                <th>Salaire</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact) : ?>
            <tr>
                <td>
                    <a href="index.php?op=show&id=<?php echo $contact->id_employes; ?>">
                        <?php echo htmlentities($contact->prenom);?>
                    </a>
                </td>
                <td><?php echo htmlentities($contact->nom);?></td>
                <td><?php echo htmlentities($contact->sexe);?></td>
                <td><?php echo htmlentities($contact->service);?></td>
                <td><?php echo htmlentities($contact->date_embauche);?></td>
                <td><?php echo htmlentities($contact->salaire);?></td>
                <td>
                    <a href="index.php?op=delete&id=<?php echo $contact->id_employes; ?>">
                        Delete
                    </a>
                </td>
                <td>
                    <a href="index.php?op=update&id=<?php echo $contact->id_employes; ?>">
                        Edite
                    </a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>
