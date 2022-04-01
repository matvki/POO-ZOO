<?php

namespace App;

use Models\BDD;

class Animal
{
    // Protected
    private int $id;
    private string $name;
    private string $age;
    private string $specie;
    private string $arrival;
    private string $gender;
    private string $parents;
    private string $food;
    private string $treatment;
    private string $environment;
    private string|null $death;
    private string|null $information;

    public function __construct($id)
    {
        $pdo = new BDD();
        $pdo = $pdo->connect();
        $query = $pdo->prepare('Select * from Animals where id like \'' . $id . '\'');
        $query->execute();
        $result = $query->fetch();

        $this->id = $result['id'];
        $this->name = $result['name'];
        $this->age = $result['age'];
        $this->specie = $result['specie'];
        $this->arrival = $result['arrival'];
        $this->gender = $result['gender'];
        $this->parents = $result['parents'];
        $this->food = $result['food'];
        $this->treatment = $result['treatment'];
        $this->environment = $result['environment'];
        $this->death = $result['death'];
        $this->information = $result['information'];

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAge(): string
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getSpecie(): string
    {
        return $this->specie;
    }

    /**
     * @return string
     */
    public function getArrival(): string
    {
        return $this->arrival;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @return string
     */
    public function getParents(): string
    {
        return $this->parents;
    }

    /**
     * @return string
     */
    public function getFood(): string
    {
        return $this->food;
    }

    /**
     * @return string
     */
    public function getTreatment(): string
    {
        return $this->treatment;
    }

    /**
     * @return string
     */
    public function getEnvironment(): string
    {
        return $this->environment;
    }

    /**
     * @return string|null
     */
    public function getDeath(): string|null
    {
        return $this->death;
    }

    /**
     * @return string|null
     */
    public function getInformation(): string|null
    {
        return $this->information;
    }

    // Setter

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $age
     */
    public function setAge(string $age): void
    {
        $this->age = $age;
    }

    /**
     * @param string $specie
     */
    public function setSpecie(string $specie): void
    {
        $this->specie = $specie;
    }

    /**
     * @param string $arrival
     */
    public function setArrival(string $arrival): void
    {
        $this->arrival = $arrival;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @param string $parents
     */
    public function setParents(string $parents): void
    {
        $this->parents = $parents;
    }

    /**
     * @param string $food
     */
    public function setFood(string $food): void
    {
        $this->food = $food;
    }

    /**
     * @param string $treatment
     */
    public function setTreatment(string $treatment): void
    {
        $this->treatment = $treatment;
    }

    /**
     * @param string $environment
     */
    public function setEnvironment(string $environment): void
    {
        $this->environment = $environment;
    }

    /**
     * @param string|null $death
     */
    public function setDeath(string|null $death): void
    {
        $this->death = $death;
    }

    /**
     * @param string|null $information
     */
    public function setInformation(string|null $information): void
    {
        $this->information = $information;
    }
}