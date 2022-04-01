<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animals - ZOO</title>
    <link rel="icon" href="/assets/img/logo.png">
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/header.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
use Repository\CaretakerRepository;
require_once '../vendor/autoload.php';

include_once 'includes/header.php'?>

<form action="./form.php" method="get" class="mt-3 ms-3">
    <input type="hidden" value="caretaker" name="type">
    <input type="submit" class="btn btn-primary" value="Ajouter un soignant">
</form>
<h1 class="text-center mt-5">Les Soignants</h1>
<div class="row container-fluid m-0">
    <?php
    $caretakers = CaretakerRepository::getAll();

    foreach ($caretakers as $caretaker) :?>
        <div class="col-6">
            <p class="text-center">nom: <?= $caretaker->getFirstname() ?>, Nom de famille: <?= $caretaker->getLastname() ?>, genre: <?= $caretaker->getGender() ?>.</p>
            <?php if ($caretaker->getGender() == 'homme') :?>
                <img src="../assets/img/homme_veto.jpeg" alt="" style="width: 45vw; height: auto">
            <?php else: ?>
                <img src="../assets/img/femme_veto.jpeg" alt="" style="width: 45vw; height: auto">
            <?php endif ?>
            <form action="./caretaker.php" method="get" class="d-flex align-items-center justify-content-center mt-2">
                <input type="hidden" name="id" value="<?= $caretaker->getId() ?>">
                <button type="submit" class="btn btn-primary">Voir plus</button>
            </form>
        </div>
    <?php endforeach; ?>
</div>

<?php include_once 'includes/footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
