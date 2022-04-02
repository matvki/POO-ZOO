<?php

use App\Animal;

if ($_GET['function'] == 'modify')
    $animal = new Animal($_GET['id']);

?>

<form action="/controllers/AnimalController.php" method="post">
    <input type="hidden" name="function" value="<?= $_GET['function'] ?>">
    <?php
        if (isset($animal))
            echo '<input type="hidden" name="id" value="'.$animal->getId().'">'
    ?>
    <div class="row">
        <label class="col d-flex flex-column">
            Nom de l'animal
            <input type="text" name="name" required value="<?= !isset($animal) ? '':(!$animal ? '': $animal->getName() )?>">
        </label>
        <label class="col d-flex flex-column">
            Date de naissance
            <input type="date" name="age" required value="<?= !isset($animal) ? '': (!$animal ? '': $animal->getAge()) ?>">
        </label>
        <label class="col d-flex flex-column">
            Espèce de l'animal
            <input type="text" name="specie" required value="<?= !isset($animal) ? '':(!$animal ? '': $animal->getSpecie()) ?>">
        </label>
        <label class="col d-flex flex-column">
            Date d'arrivée
            <input type="date" name="arrival" required value="<?= !isset($animal) ? '':(!$animal ? '': $animal->getArrival()) ?>">
        </label>
        <label class="col d-flex flex-column">
            Sex
            <input type="text" name="gender" required value="<?= !isset($animal) ? '':(!$animal ? '': $animal->getGender()) ?>">
        </label>
        <label class="col d-flex flex-column">
            Parents
            <input type="text" name="parents" required value="<?= !isset($animal) ? 'N/A':(!$animal ? 'N/A' : $animal->getParents()) ?>">
        </label>
        <label class="col d-flex flex-column">
            Régime alimentaire
            <input type="text" name="food" required value="<?= !isset($animal) ? '':(!$animal ? '': $animal->getFood()) ?>">
        </label>
        <label class="col d-flex flex-column">
            Traitement(s)
            <input type="text" name="treatment" value="<?= !isset($animal) ? 'N/A':(!$animal ? 'N/A' : $animal->getTreatment()) ?>" required>
        </label>
        <label class="col d-flex flex-column">
            Habitat naturel
            <input type="text" name="environment" required value="<?= !isset($animal) ? '':(!$animal ? '': $animal->getEnvironment()) ?>">
        </label>
        <label class="col d-flex flex-column">
            Date de décès
            <input type="date" name="death" value="<?= !isset($animal) ? '':(!$animal ? '1900-01-01' : $animal->getDeath()) ?>">
        </label>
        <label class="col d-flex flex-column">
            Informations complémentaires
            <input type="text" name="information" value="<?= !isset($animal) ? 'N/A':(!$animal ? 'N/A': $animal->getInformation()) ?>">
        </label>
    </div>
    <input type="submit" class="btn btn-primary" value="Valider">
</form>