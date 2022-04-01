<?php

namespace Repository;

use App\Animal;
use App\Caretaker;
use Models\BDD;

class AnimalsRepository
{

    public static function getAll()
    {
        $pdo = new BDD();
        $pdo = $pdo->connect();
        $query = $pdo->prepare('Select id from Animals');
        $query->bindParam('id', $id);
        $query->execute();
        $result = $query->fetchAll();

        $array = array();

        foreach ($result as $animal) {
            $animal = new Animal($animal['id']);

            $array[] = $animal;
        }

        return $array;
    }

    public static function getAnimalSameEnclosures($id)
    {
        $pdo = new BDD();
        $pdo = $pdo->connect();
        $query = $pdo->prepare('Select animal from AnimalEnclosure where enclosure = (select enclosure from AnimalEnclosure where animal = \'' . $id . '\') and animal <> \''.$id.'\'');
        $query->execute();
        $result = $query->fetchAll();

        $array = array();

        foreach ($result as $animal) {
            $animal = new Animal($animal['animal']);

            $array[] = $animal;
        }

        return $array;
    }


    public static function getCaretakers($id)
    {
        $pdo = new BDD();
        $pdo = $pdo->connect();
        $query = $pdo->prepare('Select caretaker from AnimalCaretaker where animal = \''.$id.'\'');
        $query->execute();
        $result = $query->fetchAll();

        $array = array();

        foreach ($result as $caretaker){
            $caretaker = new Caretaker($caretaker['caretaker']);

            $array[] = $caretaker;
        }
        return $array;
    }
}