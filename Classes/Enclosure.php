<?php

namespace App;

use Models\BDD;

class Enclosure
{
    private int $id;
    private string $environnement;
    private int $area;
    private int $capacity;

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
    public function getEnvironnement(): string
    {
        return $this->environnement;
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
     * @return bool
     */
    public function getEmpty(): bool
    {
        $pdo = new BDD();
        $pdo = $pdo->connect();

        $pdo->query('Select ');
        return false;
    }

    // Setter

    /**
     * @param string $environnement
     */
    public function setEnvironnement(string $environnement): void
    {
        $this->environnement = $environnement;
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