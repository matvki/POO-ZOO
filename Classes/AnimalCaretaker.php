<?php

namespace App;

use Models\BDD;

class AnimalCaretaker
{
    private int $id;
    private string $animal;
    private int $caretaker;

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
     * @return Caretaker
     */
    public function getCaretaker(): caretaker
    {
        return new caretaker($this->caretaker);
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
     * @param int $caretaker
     */
    public function setCaretaker(int $caretaker): void
    {
        $this->caretaker = $caretaker;
    }

}