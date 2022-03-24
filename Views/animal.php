<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animals - ZOO</title>
    <link rel="icon" href="/exo/assets/img/logo.png">
    <link rel="stylesheet" href="/exo/assets/css/base.css">
    <link rel="stylesheet" href="/exo/assets/css/header.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php use Repository\AnimalsRepository;
require_once '/exo/vendor/autoload.php';

include_once 'includes/header.php'?>

<h1 class="text-center mt-5">Bonjour</h1>

<?php
    $animals = AnimalsRepository::getAll();

    foreach ($animals as $animal) :?>
    <div>
        <p>nom: <?= $animal->getName() ?>, race: <?= $animal->getSpecie() ?>, genre: <?= $animal->getGenre ?>.</p>
    </div>
<?php endforeach; ?>

<?php include_once 'includes/footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
