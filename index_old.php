<?php

abstract class Animals{

    abstract protected function getName();

    final static protected function age($age){
        return 'Mon age est ' . $age;
    }
}

class Chien extends Animals{
    private $_name;
    private $_age;

    public function getName()
    {
        return $this->_name;
    }

    public function getAge(){
        return parent::age($this->_age);
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->_name = $name;
    }

    /**
     * @param string $age
     */
    public function setAge(string $age): void
    {
        $this->_age = $age;
    }
}

class Chat extends Animals{
    private $_name;
    private $_age;

    public function getName()
    {
        return $this->_name;
    }

    public function getAge(){
        return parent::age($this->_age);
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->_name = $name;
    }

    /**
     * @param string $age
     */
    public function setAge(string $age): void
    {
        $this->_age = $age;
    }
}

$chien = new Chien();
$chien->setName('Milou');
$chien->setAge('8');

//$chat = $chien;
$chat = new Chat();
$chat->setName('mikado');
$chat->setAge('6');


if ($chien === $chat)
    echo 'Attention votre chien est un chat ou votre chat est un chien !!!';
else {
    echo $chien->getName() . ' est mon nom<br>';
    echo $chien->getAge();

    echo '<br><br><br>';

    echo $chat->getName() . ' est mon nom<br>';
    echo $chat->getAge();
}