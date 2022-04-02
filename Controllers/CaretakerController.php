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
    foreach ($_POST as $key => $value){
        echo $key .' => ' . $value .'<td>';
    }
    $query = "insert into Caretaker (firstname, lastname, arrival, gender, number, email, specialty, superior, exitDate, nbrEnclosureMax, information) values (";
    foreach ($_POST as $key => $value) {
        if ($key != 'function') {

            if ($key == 'exitDate' && $value == '')
                $query.= ",'1900-01-01'";
            elseif ($key == 'firstname')
                $query.= "'" . $value. "'";
            elseif ($key == 'information' && $value == '')
                $query.= ",'null'";
            elseif ($key == 'superior' || $key == 'nbrEnclosureMax')
                $query.= ", ".$key." = ". intVal($value);
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
    $query = "Delete from Caretaker where id = ".$_POST['id'];
    $pdo = new BDD();
    $pdo->insert($query);
    header('Location: /');
}

function modify(){
    $query = "Update Caretaker set ";
    foreach ($_POST as $key => $value) {
        if ($key != 'function' && $key != 'id') {
            if ($key == 'exitDate' && $value == '')
                $query.= ",".$key ." = '1900-01-01'";
            elseif ($key == 'firstname')
                $query.= $key." = '" . $value. "'";
            elseif ($key == 'information' && $value == '')
                $query.= ",".$key." = 'null'";
            elseif ($key == 'superior' || $key == 'nbrEnclosureMax')
                $query.= ", ".$key." = ". intVal($value);
            else
                $query.= ", ".$key." = '". $value . "'";
        }
    }
    $query.= ' where id =' .$_POST['id'];
var_dump($query);
    $pdo = new BDD();
    $pdo->insert($query);
    header('Location: /');
}