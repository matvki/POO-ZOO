<?php

namespace Models;

use PDO;

class BDD
{
    const HOST = 'localhost';
    const USER = 'root';
    const PASS = 'root';
    const DBNAME = 'animals';
    const PORT = '8889';

    public $pdo;

    public function __construct()
    {
        
    }

    public function connect(): PDO
    {   
        return $this->pdo = new PDO('mysql:host='. self::HOST .';dbname='. self::DBNAME, self::USER, self::PASS);
    }
}