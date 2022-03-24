<?php

// require 'Classes/Autoloader.php';
// App\Autoloader::register();

use App\Animal;
use App\Caretaker;

require_once 'vendor/autoload.php';

$animal = new Animal(1);
var_dump($animal);

$caretaker = new Caretaker(1);
var_dump($caretaker);