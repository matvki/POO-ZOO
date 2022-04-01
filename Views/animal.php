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
<?php use App\Animal;
use Repository\AnimalsRepository;

require_once '../vendor/autoload.php';

include_once 'includes/header.php';

$animal     = new Animal($_GET['id']);
$caretakers  = AnimalsRepository::getCaretakers($animal->getId());
$animals    = AnimalsRepository::getAnimalSameEnclosures($animal->getId());
?>

<h1 class="text-center my-5"><?= ucfirst($animal->getName()) ?></h1>

<div class="container-fluid d-flex align-items-center justify-content-center">
    <img src="../assets/img/loup.jpeg" alt="" style="width: 65vw; height: auto">
    <div class="ps-5">
        <p>Nom: <?= $animal->getName() ?></p>
        <p>Date de naissance: <?= $animal->getAge() ?></p>
        <p>Espèce: <?= $animal->getSpecie() ?></p>
        <p>Date d'arrivée: <?= $animal->getArrival() ?></p>
        <p>Sex: <?= $animal->getGender() ?></p>
        <p>Parents: <?= $animal->getParents() ?></p>
        <p>Régime alimentaire: <?= $animal->getFood() ?></p>
        <p>Traitement: <?= ($animal->getTreatment() == null ? 'N/A' : $animal->getTreatment()) ?></p>
        <p>Milieu naturel: <?= $animal->getEnvironment() ?></p>
        <p>Informations complémentaire: <?= ($animal->getInformation() == null ? 'N/A' : $animal->getInformation()) ?></p>
    </div>
</div>
<div class="container-fluid row mt-3">
    <div class="col-6">
        <h3 class="text-center">Le(s) soignant(s)</h3>
        <?php foreach ($caretakers as $caretaker): ?>
            <div>
                <p class="text-center">nom: <?= $caretaker->getFirstname() ?>, Nom de famille: <?= $caretaker->getLastname() ?>, genre: <?= $caretaker->getGender() ?>.</p>
                <?php if ($caretaker->getGender() == 'homme') :?>
                    <img src="../assets/img/homme_veto.jpeg" alt="" style="width: 45vw; height: auto">
                <?php else: ?>
                    <img src="../assets/img/femme_veto.jpeg" alt="" style="width: 45vw; height: auto">
                <?php endif ?>
                <form action="./caretaker.php" method="get" class="d-flex align-items-center justify-content-center mt-2">
                    <input type="hidden" name="id" value="<?= $animal->getId() ?>">
                    <button type="submit" class="btn btn-primary">Voir plus</button>
                </form>
            </div>
        <?php endforeach ?>
    </div>
    <div class="col-6 row">
        <h3 class="text-center">Le(s) compagnon(s) d'enclot</h3>
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
