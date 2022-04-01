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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
use App\Caretaker;
use Repository\CaretakerRepository;

require_once '../vendor/autoload.php';

include_once 'includes/header.php';

$caretaker = new Caretaker($_GET['id']);
$animals = CaretakerRepository::getAnimals($caretaker->getId());
?>

<h1 class="text-center my-5"><?= ucfirst($caretaker->getFirstname()) .' '. ucfirst($caretaker->getLastname()) ?></h1>

<div class="container-fluid d-flex align-items-center justify-content-center">
    <?php if ($caretaker->getGender() == 'homme') :?>
        <img src="../assets/img/homme_veto.jpeg" alt="" style="width: 65vw; height: auto">
    <?php else: ?>
        <img src="../assets/img/femme_veto.jpeg" alt="" style="width: 65vw; height: auto">
    <?php endif ?>
    <div class="ps-5">
        <p>Prénom: <?= $caretaker->getFirstname() ?></p>
        <p>Nom de famille: <?= $caretaker->getLastname() ?></p>
        <p>Spécialité: <?= $caretaker->getSpecialty() ?></p>
        <p>Date d'arrivée: <?= $caretaker->getArrival() ?></p>
        <p>Sex: <?= $caretaker->getGender() ?></p>
        <p>Numéro: <?= $caretaker->getNumber() ?></p>
        <p>Email: <?= $caretaker->getEmail() ?></p>
        <p>Nombre maximum d'enclos à charge: <?= $caretaker->getNbrEnclosureMax() ?></p>
        <p>Supérieur hiérarchique: <?= ($caretaker->getSuperior() == null ? 'N/A' : $caretaker->getSuperior()) ?></p>
        <p>Informations complémentaires: <?= ($caretaker->getInformation() == null ? 'N/A' : $caretaker->getInformation()) ?></p>
    </div>
</div>
<div class="container-fluid row mt-3">
    <div class="col-6 row">
        <h3 class="text-center">Animaux à charge</h3>
        <?php foreach ($animals as $animal) :?>
            <div class="col-12">
                <p class="text-center">nom: <?= $animal->getName() ?>, race: <?= $animal->getSpecie() ?>, genre: <?= $animal->getGender() ?>.</p>
                <img src="../assets/img/loup.jpeg" alt="" style="width: 45vw; height: auto">
                <form action="./animal.php" method="get" class="d-flex align-items-center justify-content-center mt-2">
                    <input type="hidden" name="id" value="<?= $animal->getId() ?>">
                    <button type="submit" class="btn btn-primary">Voir plus</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include_once 'includes/footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>
</html>
