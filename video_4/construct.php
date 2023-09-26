<?php

class Person
{
    public $name;
    public $age;

    function __construct($name = "No Name", $age = 0)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function show()
    {
        echo $this->name . " - " . $this->age . "<br>";
    }
}

$p1 = new Person();

$p2 = new Person("Avinash Kumar", 19);

$p3 = new Person("Babu Bindra", 18);
// $p1->name = "Avinash Kumar";

// $p1->age = 19;

$p1->show();

$p2->show();

$p3->show();
