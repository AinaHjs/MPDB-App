<?php
$lastname = filter_input(INPUT_GET,'lastName',FILTER_SANITIZE_STRING);
$firstname = filter_input(INPUT_GET,'firstName',FILTER_SANITIZE_STRING);
$cin = filter_input(INPUT_GET,'cin',FILTER_SANITIZE_STRING);
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
                            <label for="lastName">Nom :</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required>
                            <label for="firstName">Prenom :</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required>
                            <label for="cin">Numero de la CIN : </label>
                            <input type="number" class="form-control" id="cin" name="cin" required>
                            <button class="btn btn-primary">Chercher</button>
                        </form>
                    </section>
                    <?php } else { ?>
                        <?php require("database.php") ?>
                        <?php
                            if ($lastname && $firstname && $cin) {
                                $query = 'SELECT * FROM Person 
                                                    WHERE cin = :cin ';
                                $statement = $db->prepare($query);
                                $statement->bindValue(':cin', $cin);
                                $statement->execute();
                                $results = $statement->fetchAll();
                                $statement->closeCursor(); 
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