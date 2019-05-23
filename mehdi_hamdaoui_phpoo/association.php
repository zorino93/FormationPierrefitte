<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VTC</title>

    <!-- Link Bootstrap - CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="conducteur.php">Conducteur</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="vehicule.php">Vehicule</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="association.php">Association</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <?php

        require_once 'Autoload.php';

        $controller = new controller\ControllerAssociation();

        $controller->handleRequest();

        ?>

    </div>
    <footer>

    </footer>
</body>

</html>