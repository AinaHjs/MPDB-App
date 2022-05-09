<?php
$lastname = filter_input(INPUT_GET,'lastName',FILTER_SANITIZE_STRING);
$firstname = filter_input(INPUT_GET,'firstName',FILTER_SANITIZE_STRING);
$IDnumber = filter_input(INPUT_GET,'cin',FILTER_SANITIZE_STRING);

$dofBirth = filter_input(INPUT_POST, 'dofBirth', FILTER_SANITIZE_STRING);

$adresse = filter_input(INPUT_POST, 'adresse', FILTER_SANITIZE_STRING);
$lieu = filter_input(INPUT_POST, 'lieu', FILTER_SANITIZE_STRING);
$region = filter_input(INPUT_POST, 'region', FILTER_SANITIZE_STRING);
$arrondissement = filter_input(INPUT_POST, 'arrondissement', FILTER_SANITIZE_STRING);

$prenomPere = filter_input(INPUT_POST, 'prenompere', FILTER_SANITIZE_STRING);
$nomPere = filter_input(INPUT_POST, 'nompere', FILTER_SANITIZE_STRING);
$prenomMere = filter_input(INPUT_POST, 'prenommere', FILTER_SANITIZE_STRING);
$nomMere = filter_input(INPUT_POST, 'nommere', FILTER_SANITIZE_STRING);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <title>MPDB Application</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <header>
                        <h1 class="text-center">MPDB Application</h1>
                    </header>

                    <?php if (!$lastname && !$firstname && !$cin) {?>
                        <section>
                        <h3>Rechercher une personne</h3>
                        <form action="." method="GET"> 
                            <input type="text" class="form-control" id="firstName" name="firstName"  placeholder="Prenom" required>
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Nom" required>
                            <input type="number" class="form-control" id="cin" name="cin"  placeholder="Numero de la CIN" required>
                            <button class="btn btn-primary">Chercher</button>
                        </form>
                    </section>
                    <?php } else { ?>
                        <?php 
                        require("database.php");
                        require("setData.php");
                        require("getData.php"); 
                        ?>
                        <?php
                            if ($lastname && $firstname && $IDNumber) {
                                 getData();
                            }
                        ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        

    </main>



    <script src="lib/js/bootstrap.bundle.js"></script>
</body>
</html>