<?php

namespace Repository;

use App\Animal;
use Models\BDD;

class AnimalsRepository{

    public static function getAll(){
        $pdo = new BDD();
        $pdo = $pdo->connect();
        $query = $pdo->prepare('Select id from Animals');
        $query->bindParam('id', $id);
        $query->execute();
        $result = $query->fetchAll();

        $array = array();

        foreach ($result as $animal){
            $animal = new Animal($animal['id']);

            $array[] = $animal;
        }

        return $array;
    }


}