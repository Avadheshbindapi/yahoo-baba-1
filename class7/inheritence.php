<?php
class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($n,$a,$s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    function info(){
        echo "<h3>Employee Profile</he>  <br>";
        echo "Employee Name: " .  $this->name . "<br>";
        echo "Employee age: " .  $this->age . "<br>";
        echo "Employee salary: " .  $this->salary . "<br>";
    }
}
$e1 = new employee("Ram", 25 , 25000);
$e1->info();

echo "<br>";



