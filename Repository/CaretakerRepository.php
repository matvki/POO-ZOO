<?php

namespace Repository;

use App\Animal;
use App\Caretaker;
use Models\BDD;

class CaretakerRepository{

    public static function getAll(){
        $pdo = new BDD();
        $pdo = $pdo->connect();
        $query = $pdo->prepare('Select id from Caretaker');
        $query->execute();
        $result = $query->fetchAll();

        $array = array();

        foreach ($result as $caretaker){
            $caretaker = new Caretaker($caretaker['id']);

            $array[] = $caretaker;
        }

        return $array;
    }


    public static function getAnimals($id){
        $pdo = new BDD();
        $pdo = $pdo->connect();
        $query = $pdo->prepare('Select animal from AnimalCaretaker where caretaker = \''.$id.'\'');
        $query->execute();
        $result = $query->fetchAll();

        $array = array();

        foreach ($result as $animal){
            $animal = new Animal($animal['animal']);

            $array[] = $animal;
        }

        return $array;
    }
}