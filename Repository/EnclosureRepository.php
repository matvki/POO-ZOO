<?php

namespace Repository;

use App\Animal;
use App\Enclosure;
use Models\BDD;

class EnclosureRepository{

    public static function getAll(){
        $pdo = new BDD();
        $pdo = $pdo->connect();
        $query = $pdo->prepare('Select id from Enclosure');
        $query->execute();
        $result = $query->fetchAll();

        $array = array();

        foreach ($result as $enclosure){
            $enclosure = new Enclosure($enclosure['id']);

            $array[] = $enclosure;
        }

        return $array;
    }

    public static function getAnimals($id){
        $pdo = new BDD();
        $pdo = $pdo->connect();
        $query = $pdo->prepare('Select animal from AnimalEnclosure where enclosure = \''.$id.'\'');
        $query->execute();
        $result = $query->fetchAll();

        $array = array();

        foreach ($result as $animal) {
            $animal = new Animal($animal['animal']);

            $array[] = $animal;
        }

        return $array;
    }
}