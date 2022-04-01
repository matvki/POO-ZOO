<form action="/controllers/AnimalController.php" method="post">
    <input type="hidden" name="function" value="add">
    <div class="row">
        <label class="col d-flex flex-column">
            Nom de l'animal
            <input type="text" name="name" required>
        </label>
        <label class="col d-flex flex-column">
            Date de naissance
            <input type="date" name="age" required>
        </label>
        <label class="col d-flex flex-column">
            Espèce de l'animal
            <input type="text" name="specie" required>
        </label>
        <label class="col d-flex flex-column">
            Date d'arrivée
            <input type="date" name="arrival" required>
        </label>
        <label class="col d-flex flex-column">
            Sex
            <input type="text" name="gender" required>
        </label>
        <label class="col d-flex flex-column">
            Parents
            <input type="text" name="parents" value="N/A" required>
        </label>
        <label class="col d-flex flex-column">
            Régime alimentaire
            <input type="text" name="food" required>
        </label>
        <label class="col d-flex flex-column">
            Traitement(s)
            <input type="text" name="treatment" value="N/A" required>
        </label>
        <label class="col d-flex flex-column">
            Habitat naturel
            <input type="text" name="environment" required>
        </label>
        <label class="col d-flex flex-column">
            Date de décès
            <input type="date" name="death">
        </label>
        <label class="col d-flex flex-column">
            Informations complémentaires
            <input type="text" name="information">
        </label>
    </div>
    <input type="submit" class="btn btn-primary" value="Valider">
</form>