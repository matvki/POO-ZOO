<?php

use Models\BDD;

require_once '../vendor/autoload.php';

if ($_POST['function'] == 'add') {
    add();
}

function add(){
    $query = "insert into Animals (name, age, specie, arrival, gender, parents, food, treatment, environment, death, information) values (";
    foreach ($_POST as $key => $value) {
        if ($key != 'function') {
            if ($value === '')
                $query .= "'null'";
            else
                $query.= "'". $value . "'";
        }
    }
    $query.= ')';

    $pdo = new BDD();
    $pdo->insert($query);
    echo '<script>document.location = /</script>';
}
