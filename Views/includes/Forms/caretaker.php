<?php

use App\Caretaker;

if ($_GET['function'] == 'modify')
    $caretaker = new Caretaker($_GET['id']);


?>

<form action="/Controllers/CaretakerController.php" method="post">
    <input type="hidden" name="function" value="<?= $_GET['function'] ?>">
    <?php
    if (isset($caretaker))
        echo '<input type="hidden" name="id" value="'.$caretaker->getId().'">'
    ?>
    <div class="row">
        <label class="col d-flex flex-column">
            Prénom
            <input type="text" name="firstname" required value="<?= !isset($caretaker) ? '': (!$caretaker ? '': $caretaker->getFirstname()) ?>">
        </label>
        <label class="col d-flex flex-column">
            Nom de famille
            <input type="text" name="lastname" required value="<?= !isset($caretaker) ? '': (!$caretaker ? '': $caretaker->getLastname()) ?>">
        </label>
        <label class="col d-flex flex-column">
            Date d'arrivée
            <input type="date" name="arrival" required value="<?= !isset($caretaker) ? '': (!$caretaker ? '': $caretaker->getArrival()) ?>">
        </label>
        <label class="col d-flex flex-column">
            Sex
            <input type="text" name="gender" required value="<?= !isset($caretaker) ? '': (!$caretaker ? '': $caretaker->getGender()) ?>">
        </label>
        <label class="col d-flex flex-column">
            Numéro de téléphone
            <input type="text" name="number" required value="<?= !isset($caretaker) ? '': (!$caretaker ? '': $caretaker->getNumber()) ?>">
        </label>
        <label class="col d-flex flex-column">
            Email
            <input type="email" name="email" required value="<?= !isset($caretaker) ? '': (!$caretaker ? '': $caretaker->getEmail()) ?>">
        </label>
        <label class="col d-flex flex-column">
            Spécialité
            <input type="text" name="specialty" required value="<?= !isset($caretaker) ? '': (!$caretaker ? '': $caretaker->getSpecialty()) ?>">
        </label>
        <label class="col d-flex flex-column">
            Supérieur hiérarchique
            <input type="number" name="superior" required value="<?= !isset($caretaker) ? '': (!$caretaker ? '': $caretaker->getSuperior()) ?>">
        </label>
        <label class="col d-flex flex-column">
            Date de départ
            <input type="date" name="exitDate" value="<?= !isset($caretaker) ? '': (!$caretaker ? '': $caretaker->getExitDate()) ?>">
        </label>
        <label class="col d-flex flex-column">
            Nombre d'enclos Maximum
            <input type="number" name="nbrEnclosureMax" required value="<?= !isset($caretaker) ? '': (!$caretaker ? '': $caretaker->getNbrEnclosureMax()) ?>">
        </label>
        <label class="col d-flex flex-column">
            Informations supplémentaires
            <input type="text" name="information" value="<?= !isset($caretaker) ? 'N/A': (!$caretaker ? 'N/A': $caretaker->getInformation()) ?>">
        </label>
    </div>
    <input type="submit" class="btn btn-primary" value="Valider">
</form>