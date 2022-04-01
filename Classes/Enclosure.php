<?php

namespace App;

use Models\BDD;

class Enclosure
{
    private int $id;
    private string $environment;
    private int $area;
    private int $capacity;

    public function __construct($id)
    {
        $pdo = new BDD();
        $pdo = $pdo->connect();
        $query = $pdo->prepare('Select * from Enclosure where id like :id');
        $query->bindParam('id', $id);
        $query->execute();
        $result = $query->fetch();

        $this->id           = $result['id'];
        $this->environment  = $result['environment'];
        $this->area         = $result['area'];
        $this->capacity     = $result['capacity'];

        $pdo = null;
    }

    // Getter

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEnvironment(): string
    {
        return $this->environment;
    }

    /**
     * @return int
     */
    public function getArea(): int
    {
        return $this->area;
    }

    /**
     * @return int
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * @return array
     */
    public function getAnimals(): array
    {
        $array = array();
        $pdo = new BDD();
        $pdo = $pdo->connect();

        $query = $pdo->query('Select animal from AnimalEnclosure where enclosure = \''.$this->id.'\'');
        $query->execute();
        $result =  $query->fetchAll();

        foreach ($result as $animal){
            $animal = new Animal($animal['animal']);

            $array[] = $animal;
        }
        return $array;
    }

    // Setter

    /**
     * @param string $environment
     */
    public function setEnvironnement(string $environment): void
    {
        $this->environment = $environment;
    }

    /**
     * @param int $area
     */
    public function setArea(int $area): void
    {
        $this->area = $area;
    }

    /**
     * @param int $capacity
     */
    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }
}