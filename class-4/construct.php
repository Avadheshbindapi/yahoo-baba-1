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

$p2 = new Person("avadhesh Kumar", 24);

$p3 = new Person("avi", 18);
// $p1->name = "Avadhesh Kumar";

// $p1->age = 19;

$p1->show();

$p2->show();

$p3->show();
