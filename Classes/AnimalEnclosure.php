<?php

namespace App;

use Models\BDD;

class AnimalEnclosure
{
    private int $id;
    private string $animal;
    private int $enclosure;

    // Getter

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Animal
     */
    public function getAnimal(): Animal
    {
        return new Animal($this->animal);
    }

    /**
     * @return Enclosure
     */
    public function getEnclosure(): Enclosure
    {
        return new Enclosure($this->enclosure);
    }

    // Setter

    /**
     * @param int $animal
     */
    public function setAnimal(int $animal): void
    {
        $this->animal = $animal;
    }

    /**
     * @param int $enclosure
     */
    public function setEnclosure(int $enclosure): void
    {
        $this->enclosure = $enclosure;
    }

}