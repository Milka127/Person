<?php
class Person {
    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;

    function __construct($name, $lastname, $age, $mother = null, $father = null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
        $this->hp = 100;
    }
    function sayHi($name)
    {
        return "Hi $name, I`m " . $this->name;
    }
    function setHp($hp)
    {
        if ($this->hp + $hp >= 100) $this->hp = 100;
        else $this->hp = $this->hp + $hp;
    }
    function getHp()
    {
        return $this->hp;
    }
    function getName()
    {
        return $this->name;
    }
    function getMother()
    {
        return $this->mother;
    }
    function getFather()
    {
        return $this->father;
    }
   	function getGrandMother()
    {
        return $this->grandMother;
    }
    function getGrandFather()
    {
        return $this->grandFather;
    }
    function getInfo(){
        return "
        <h3>A few words about myself:</h3><br>"."My name is: ".$this->getName()."<br> my lastname is: ".$this->getLastname()."<br> my father is: ".$this->getFather()->getName();

    }
}


$alex = new Person("Alex", "Ivanov", 42, $elena, $ivan, $elena, $igor);
$olga = new Person("Olga", "Ivanov", 35, $irina, $igpr);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

$irina = new Person("Irina", "Petrova", 75);
$igor = new Person("Igor", "Petrov", 68);

$elena = new Person("Elena", "Ivanova", 68);
$ivan = new Person("Ivan", "Ivanov", 65);

echo $valera->getName() . "<br>";
echo $valera->getMother()->getName() . "<br>";
echo $valera->getGrandMother()->getName() . "<br>";
echo $valera->getFather()->getMother()->getName();
