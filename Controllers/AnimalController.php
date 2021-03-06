<?php

use Models\BDD;

require_once '../vendor/autoload.php';

if ($_POST['function'] == 'add')
    add();
elseif ($_POST['function'] == 'delete')
    remove();
elseif ($_POST['function'] == 'modify')
    modify();


function add(){
    $query = "insert into Animals (name, age, specie, arrival, gender, parents, food, treatment, environment, death, information) values (";
    foreach ($_POST as $key => $value) {
        if ($key != 'function') {

            if ($key == 'death')
                $query.= ",'1900-01-01'";
            elseif ($key == 'name')
                $query.= "'" . $value. "'";
            elseif ($key == 'information')
                $query.= ",'null'";
            else
                $query.= ",'". $value . "'";
        }
    }
    $query.= ')';

    $pdo = new BDD();
    $pdo->insert($query);
    header('Location: /');
}

function remove(){
    $query = "Delete from Animals where id = ".$_POST['id'];
    $pdo = new BDD();
    $pdo->insert($query);
    header('Location: /');
}

function modify(){
    $query = "Update Animals set ";
    foreach ($_POST as $key => $value) {
        if ($key != 'function' && $key != 'id') {
            if ($key == 'death' && $value == '')
                $query.= ",".$key ." = '1900-01-01'";
            elseif ($key == 'name')
                $query.= $key." = '" . $value. "'";
            elseif ($key == 'information' && $value == '')
                $query.= ",".$key." = 'null'";
            else
                $query.= ", ".$key." = '". $value . "'";
        }
    }
    $query.= 'where id =' .$_POST['id'];

    $pdo = new BDD();
    $pdo->insert($query);
    header('Location: /');
}