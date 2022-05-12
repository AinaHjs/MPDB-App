<?php
$firstname = filter_input(INPUT_GET,'firstName',FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_GET,'lastName',FILTER_SANITIZE_STRING);
$IDNumber = filter_input(INPUT_GET,'ID',FILTER_SANITIZE_STRING);

$firstname = filter_input(INPUT_POST,'firstName',FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_POST,'lastName',FILTER_SANITIZE_STRING);
$IDNumber = filter_input(INPUT_POST,'ID',FILTER_SANITIZE_STRING);

?>

<?php include('header.php') ?>

<main>
    <?php if (!$firstname && !$lastname && !$IDNumber) {?>
        <section>
            <h3>Rechercher une personne dans la base de données</h3>
            <form action="." method="GET"> 
                <input type="text" class="form-control my-3" id="firstname" name="firstName"  placeholder="Prenom" required>
                <input type="text" class="form-control my-3" id="lastname" name="lastName" placeholder="Nom" required>
                <input type="number" class="form-control my-3" id="id" name="ID"  placeholder="Numero de la CIN" required>
                <div class="flex justify-content-around">
                    <button class="btn btn-primary">Chercher</button>
                    <button class="btn btn-success">Mettre à jour</button>
                </div>
            </form>
        </section>
    <?php } else { ?>
        <?php if ($lastname && $firstname && $IDNumber) { ?>
            <?php require('dbOps.php') ?>
            <div class="flex">
                <h2>Information sur <?= $firstname?> <?= $lastname?> ?></h2>
                <section>
                    <h2>A propos</h2>
                </section>
                <section>
                    <h3>Domicile</h3>
                </section>
                <section>
                    <h3>Parents</h3>
                </section>
            </div>
        <?php } else { ?>

        <?php } ?>
    <?php } ?>
</main>

<?php include('footer.php') ?>