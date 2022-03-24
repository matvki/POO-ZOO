<?php

namespace App;

use Models\BDD;

class Caretaker
{
    private int $id;
    private string $firstname;
    private string $lastname;
    private string $arrival;
    private string $gender;
    private int $number;
    private string $email;
    private string $picture;
    private string $specialty;
//    private int $nbrEnclosure; // le recuperer en fetchan tout les annimaux qont elle s'occupe et les compter
    private int|null $superior;
    private string|null $exit;
    private string|null $information;

    public function __construct($id)
    {
        $pdo = new BDD();
        $pdo = $pdo->connect();
        $query = $pdo->prepare('Select * from Caretaker where id like :id');
        $query->bindParam('id', $id);
        $query->execute();
        $result = $query->fetch();

        $this->id           = $result['id'];
        $this->firstname     = $result['firstname'];
        $this->lastname     = $result['lastname'];
        $this->arrival      = $result['arrival'];
        $this->gender       = $result['gender'];
        $this->number       = $result['number'];
        $this->email        = $result['email'];
        $this->picture      = $result['picture'];
        $this->specialty    = $result['specialty'];
//        $this->nbrEnclosure = $result['nbrEnclosure'];
        $this->superior     = $result['superior'];
        $this->exit         = $result['exit'];
        $this->information  = $result['information'];

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
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
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
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPicture(): string
    {
        return $this->picture;
    }

    /**
     * @return string
     */
    public function getSpecialty(): string
    {
        return $this->specialty;
    }

    /**
     * @return int
     */
    public function getNbrEnclosure(): int
    {
        return $this->nbrEnclosure;
    }

    /**
     * @return int
     */
    public function getSuperior(): int
    {
        return $this->superior;
    }

    /**
     * @return string
     */
    public function getExit(): string
    {
        return $this->exit;
    }

    /**
     * @return string
     */
    public function getInformation(): string
    {
        return $this->information;
    }

    // Setter

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
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
     * @param int $number
     */
    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param string $picture
     */
    public function setPicture(string $picture): void
    {
        $this->picture = $picture;
    }

    /**
     * @param string $specialty
     */
    public function setSpecialty(string $specialty): void
    {
        $this->specialty = $specialty;
    }

    /**
     * @param int $nbrEnclosure
     */
    public function setNbrEnclosure(int $nbrEnclosure): void
    {
        $this->nbrEnclosure = $nbrEnclosure;
    }

    /**
     * @param int $superior
     */
    public function setSuperior(int $superior): void
    {
        $this->superior = $superior;
    }

    /**
     * @param string $exit
     */
    public function setExit(string $exit): void
    {
        $this->exit = $exit;
    }

    /**
     * @param string $information
     */
    public function setInformation(string $information): void
    {
        $this->information = $information;
    }
}
